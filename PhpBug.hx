class PhpBug {

    static public function main () : Void {
        haxe.rtti.Rtti.hasRtti(Bugged);
    }

}


@:rtti
@somemeta
class Bugged {

}