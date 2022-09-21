# Dynamically run

## Algorithm:

1. Add dumper to your project
1. Run 'Meta::dump' with config parameter and base directory
```
// As an example:
Liloi\Dumper\Meta::dump([
    [
        "title" => "Signum",
        "description" => "My signum",
        "type" => "file",
        "global" => "https://drive.google.com/uc?export=download&id=1vmPddaL8h9lYmBjXotK0f-iXAWgHKTSt",
        "local" => "/Signum.png"
    ],
    [
        "title" => "Road",
        "description" => "First chapter of 'Secret of Tonce' novel",
        "type" => "file",
        "global" => "http://docs.google.com/document/d/1VMDufodhp6CX8Kx9SYTb83CxHsfsr1cvcgLQ29PrbiQ/export?format=pdf",
        "local" => "/Road.pdf"
    ]
], __DIR__);
```