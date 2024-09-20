<?php
/*
Plugin Name: Strigno Sidebar (Buttons Menu)
Description: Provides clickable sidebar buttons through a shortcode, shortcode: [strigno_sidebar].
Version: 1.0
Author: Antonio Guiotto
*/

// Function to enqueue scripts and styles
function sidebar_buttons_scripts()
{
    // Optionally, enqueue a CSS file if you have additional styles
    wp_enqueue_style('sidebar-buttons-css', plugins_url('/sidebar-buttons.css', __FILE__));
    // Uncomment and modify if you need to enqueue JavaScript
    // wp_enqueue_script('sidebar-buttons-js', plugins_url('/sidebar-buttons.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sidebar_buttons_scripts');

function sidebar_buttons_shortcode()
{
    // Output the specified HTML
    return '<div>
                <div class="side-button-outer albo-online albo-pretorio" onclick="window.location.href=\'https://alboapspfloriani.giscoservice.it\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Albo</div>
                                <div class="side-button-text-text-second">Pretorio</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/FOLDER.svg" alt="Folder Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-button-outer amministrazione-trasparente" onclick="window.location.href=\'/amministrazione-trasparente\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Amministrazione</div>
                                <div class="side-button-text-text-second">Trasparente</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BANK.svg" alt="Bank Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-button-outer carta-servizi" onclick="window.location.href=\'/pagina-della-carta-dei-servizi\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Carta</div>
                                <div class="side-button-text-text-second">dei Servizi</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BOOK.svg" alt="Book Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-button-outer news" onclick="window.location.href=\'/news\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">News</div>
                                <div class="side-button-text-text-second">& Articoli</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apspstrigno.chebellagiornata.it/wp-content/uploads/2024/08/POSTS.svg" style="height: 44px;" alt="News Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-button-outer concorsi-dellente" onclick="window.location.href=\'https://apspstrigno.chebellagiornata.it/concorsi-dellente/\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Concorsi</div>
                                <div class="side-button-text-text-second">dell\'ente</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BANK.svg" alt="Bank Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-button-outer anticorruzione-trasparenza">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Anticorruzione</div>
                                <div class="side-button-text-text-second">e trasparenza</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BAN.svg" alt="Ban Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}

add_shortcode('strigno_sidebar', 'sidebar_buttons_shortcode');
