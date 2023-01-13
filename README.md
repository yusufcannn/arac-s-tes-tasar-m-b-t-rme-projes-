Selamlar. PHP-HTML-CSS ile tasarladığım sitemde site ana hatlarına ait bazı modülleri ve kodları aşşağıda paylaşıyorum.


VERİTABANI BAĞLANTISI MODULÜ


	define( 'DB_NAME', 's1_arabaalsat_shop' );

	/** Database username */
	define( 'DB_USER', 's1_arabaalsat_shop' );

	/** Database password */
	define( 'DB_PASSWORD', 'EreSR9BkYWtpmt8RcWZP3NOyKqvBDgwcO0AV0v0o5LOLJMrsvBbSQommil250i' );

	/** Database hostname */
	define( 'DB_HOST', 'localhost' );

	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8mb4' );





HTTP BAĞLANTISINI GÜVENLİ HALE GETİRME MODULÜ

	if ( 0 === strpos( $_SERVER['REQUEST_URI'], 'http' ) ) {
                safe_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
                exit;
        } else {
                safe_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
                exit;
        }
       
       
       
       
VERİTABANINDA EKSİK TABLOLARI OLUŞTURMA MODULÜ

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




SATIRLARI BULMA MODULÜ

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
	
	
PUANLAMAYA GÖRE EN ÇOK SATANLAR KISMI MODULÜ


	<div class="page-description"><h1>Çok Satılanlar</h1>
	<div data-block-name="woocommerce/product-top-rated" data-rows="1" class="wc-block-grid wp-block-product-top-rated wc-block-product-top-rated has-3-columns">
	<ul class="wc-block-grid__products">
	<li class="wc-block-grid__product">
					<a href="https://arabaalsat.shop/index.php/urun/wolkswagen-polo-1-4-2012/" class="wc-block-grid__product-link"><p></p>
	<div class="wc-block-grid__product-image"><img width="324" height="324" src="https://arabaalsat.shop/wp-content/uploads/2022/11/polo-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="WOLKSWAGEN POLO 1.4 2012" decoding="async" loading="lazy" srcset="https://arabaalsat.shop/wp-content/uploads/2022/11/polo-324x324.png 324w, https://arabaalsat.shop/wp-content/uploads/2022/11/polo-150x150.png 150w, https://arabaalsat.shop/wp-content/uploads/2022/11/polo-100x100.png 100w" sizes="(max-width: 324px) 100vw, 324px"></div>
	<div class="wc-block-grid__product-title">WOLKSWAGEN POLO 1.4 2012</div>
	</a><p><a href="https://arabaalsat.shop/index.php/urun/wolkswagen-polo-1-4-2012/" class="wc-block-grid__product-link">				</a></p>
	<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₺</span>420.000,00</span></div>
	<div class="wc-block-grid__product-rating">
	<div class="star-rating" role="img" aria-label="5 üzerinden 5.00 oy aldı"><span style="width:100%"><span class="rating">1</span> müşteri puanına dayanarak 5 üzerinden <strong class="rating">5.00</strong> puan aldı</span></div>
	</div>
	<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=65" aria-label="“WOLKSWAGEN POLO 1.4 2012” ürününü sepete ekle" data-quantity="1" data-product_id="65" data-product_sku="" rel="nofollow" class="wp-block-button__link wp-element-button add_to_cart_button ajax_add_to_cart">Sepete Ekle</a></div>
	</li>
	<li class="wc-block-grid__product">
					<a href="https://arabaalsat.shop/index.php/urun/hyundai-i20-2017/" class="wc-block-grid__product-link"><p></p>
	<div class="wc-block-grid__product-image"><img width="324" height="324" src="https://arabaalsat.shop/wp-content/uploads/2022/11/i20-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="HYUNDAI İ20 2017" decoding="async" loading="lazy" srcset="https://arabaalsat.shop/wp-content/uploads/2022/11/i20-324x324.png 324w, https://arabaalsat.shop/wp-content/uploads/2022/11/i20-150x150.png 150w, https://arabaalsat.shop/wp-content/uploads/2022/11/i20-100x100.png 100w" sizes="(max-width: 324px) 100vw, 324px"></div>
	<div class="wc-block-grid__product-title">HYUNDAI İ20 2017</div>
	</a><p><a href="https://arabaalsat.shop/index.php/urun/hyundai-i20-2017/" class="wc-block-grid__product-link">				</a></p>
	<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₺</span>397.000,00</span></div>
	<div class="wc-block-grid__product-rating">
	<div class="star-rating" role="img" aria-label="5 üzerinden 4.00 oy aldı"><span style="width:80%"><span class="rating">1</span> müşteri puanına dayanarak 5 üzerinden <strong class="rating">4.00</strong> puan aldı</span></div>
	</div>
	<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=52" aria-label="“HYUNDAI İ20 2017” ürününü sepete ekle" data-quantity="1" data-product_id="52" data-product_sku="" rel="nofollow" class="wp-block-button__link wp-element-button add_to_cart_button ajax_add_to_cart">Sepete Ekle</a></div>
	</li>
	<li class="wc-block-grid__product">
					<a href="https://arabaalsat.shop/index.php/urun/fiat-linea-2007-1-4-multijet/" class="wc-block-grid__product-link"><p></p>
	<div class="wc-block-grid__product-image"><img width="324" height="315" src="https://arabaalsat.shop/wp-content/uploads/2022/11/Fiat_Linea_Emotion_Fire_1.4_Petrol-324x315.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="FIAT LINEA 2007 1.4 MULTIJET" decoding="async" loading="lazy"></div>
	<div class="wc-block-grid__product-title">FIAT LINEA 2007 1.4 MULTIJET</div>
	</a><p><a href="https://arabaalsat.shop/index.php/urun/fiat-linea-2007-1-4-multijet/" class="wc-block-grid__product-link">				</a></p>
	<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₺</span>233.500,00</span></div>
	<div class="wc-block-grid__product-rating">
	<div class="star-rating" role="img" aria-label="5 üzerinden 4.00 oy aldı"><span style="width:80%"><span class="rating">1</span> müşteri puanına dayanarak 5 üzerinden <strong class="rating">4.00</strong> puan aldı</span></div>
	</div>
	<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=11" aria-label="“FIAT LINEA 2007 1.4 MULTIJET” ürününü sepete ekle" data-quantity="1" data-product_id="11" data-product_sku="" rel="nofollow" class="wp-block-button__link wp-element-button add_to_cart_button ajax_add_to_cart">Sepete Ekle</a></div>
	</li>
	</ul>
	</div>
	</div>
