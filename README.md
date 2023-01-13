VERİTABANI BAĞLANTISI İÇİN KODLAR


define( 'DB_NAME', 's1_arabaalsat_shop' );

/** Database username */
define( 'DB_USER', 's1_arabaalsat_shop' );

/** Database password */
define( 'DB_PASSWORD', 'EreSR9BkYWtpmt8RcWZP3NOyKqvBDgwcO0AV0v0o5LOLJMrsvBbSQommil250i' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );





HTTP BAĞLANTISINI GÜVENLİ HALE GETİRME KODU

if ( 0 === strpos( $_SERVER['REQUEST_URI'], 'http' ) ) {
                safe_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
                exit;
        } else {
                safe_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
                exit;
        }
       
       
       
       
VERİTABANINDA EKSİK TABLOLARI OLUŞTURMA KODU

if ( ! function_exists( 'maybe_create_table' ) ) :
        /**
		* Olmayan tabloları oluşturmak için
         */
        function maybe_create_table( $table_name, $create_ddl ) {
                global $wpdb;

                foreach ( $wpdb->get_col( 'SHOW TABLES', 0 ) as $table ) {
                        if ( $table === $table_name ) {
                                return true;
                        }
                }

                $wpdb->query( $create_ddl );

                foreach ( $wpdb->get_col( 'SHOW TABLES', 0 ) as $table ) {
                        if ( $table === $table_name ) {
                                return true;
                        }
                }

                return false;
        }
endif;




SATIRLARI BULMA KODU

function check_column( $table_name, $col_name, $col_type, $is_null = null, $key = null, $default_value = null, $extra = null ) {
        global $wpdb;

        $diffs   = 0;
        $results = $wpdb->get_results( "DESC $table_name" );

        foreach ( $results as $row ) {

                if ( $row->Field === $col_name ) {


                        if ( ( null !== $col_type ) && ( $row->Type !== $col_type ) ) {
                                ++$diffs;
                        }
                        if ( ( null !== $is_null ) && ( $row->Null !== $is_null ) ) {
                                ++$diffs;
                        }
                        if ( ( null !== $key ) && ( $row->Key !== $key ) ) {
                                ++$diffs;
                        }
                        if ( ( null !== $default_value ) && ( $row->Default !== $default_value ) ) {
                                ++$diffs;
                        }
                        if ( ( null !== $extra ) && ( $row->Extra !== $extra ) ) {
                                ++$diffs;
                        }

                        if ( $diffs > 0 ) {
                                return false;
                        }

                        return true;
                }
        }

        return false;
}
