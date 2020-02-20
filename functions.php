// Agregar Lazy load por default navegador
if (!(is_admin() )) {
    function lazyloadimgs ( $imgs ) {
        if ( FALSE === strpos( $imgs, '.jpg','.png'  ) ) return $imgs;
        return "$imgs\"" ." ". 'loading="lazy';
    }
    add_filter( 'clean_url', 'lazyloadimgs', 11, 1 );
}
