<?php

namespace Liloi\Dumper;

use Liloi\Dumper\Atom;

/**
 * Meta class.
 * @package Liloi\Dumper
 */
class Meta
{
    /**
     * Gets meta atoms list.
     *
     * @param array $source List of files.
     * @return array List of meta atoms.
     */
    public static function getList(array $source): array
    {

        if(empty($source))
        {
            $dirMeta = __DIR__ . '/../Meta';
            $fnsAtoms = self::getDirContents($dirMeta);
        }
        else
        {
            $fnsAtoms = $source;
        }

        $list = [];

        foreach ($fnsAtoms as $fn)
        {
            $data = json_decode(file_get_contents($fn), true);

            foreach($data as $datum)
            {
                $list[] = new Atom($datum);
            }
        }

        return $list;
    }

    /**
     * Gets atom JSON list.
     *
     * @param string $dir Find at directory.
     * @return array Atom JSON list.
     */
    private static function getDirContents(string $dir): array
    {
        $list = [];
        $files = scandir($dir);

        foreach($files as $value)
        {
            if(in_array($value, ['.', '..']))
            {
                continue;
            }

            $filename = $dir . DIRECTORY_SEPARATOR . $value;

            if(!is_dir($filename))
            {
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                if(in_array($ext, ['json', 'atom']))
                {
                    $list[] = $filename;
                }

                continue;
            }

            $list = array_merge($list, self::getDirContents($filename));
        }

        return $list;
    }

    /**
     * Dump all atoms.
     * @todo Add test (foreign systems request check; ).
     *
     * @param array $source List of files (if empty - dumper will search in /Meta directory). See Example.atom for format.
     */
    public static function dump(array $source = []): void
    {
        $dirDumper = Config::getDumperDirectory();
        $atoms = self::getList($source);

        /** @var Atom $atom */
        foreach ($atoms as $atom)
        {
            $local = $dirDumper . $atom->getLocal();
            $dirLocal = dirname($local);
            $global = $atom->getGlobal();

            if(!is_dir($dirLocal))
            {
                mkdir($dirLocal, 0777, true);
            }

            $request = sprintf(
                'wget "%s" -O "%s"',
                $global,
                $local
            );

            shell_exec($request);
        }
    }
}