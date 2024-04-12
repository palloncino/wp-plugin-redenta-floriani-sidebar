<?php
/*
Plugin Name: Sidebar Buttons
Description: Provides clickable sidebar buttons through a shortcode.
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
                <div class="side-button-outer albo-online albo-pretorio" onclick="window.location.href=\'/albo-online\'">
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
                <div class="side-button-outer amministrazione-aperta" onclick="window.location.href=\'/amministrazione-aperta\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Amministrazione</div>
                                <div class="side-button-text-text-second">Aperta</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/INFO.svg" alt="Info Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-button-outer carta-servizi" onclick="window.open(\'https://www.apsp-roncegno.it/document/pdf/carta-dei-servizi-roncegno-2019/p29e166d7503aaf5194827ab81089f23/\', \'_blank\')">
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
                <div class="side-button-outer prevenzione-corruzione" onclick="window.location.href=\'/prevenzione-della-corruzione\'">
                    <div class="side-button-inner">
                        <div class="side-button-icon">
                            <div class="animate-svg"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/MANINA.svg" alt="Cursor Icon"></div>
                        </div>
                        <div class="side-button-text">
                            <div class="side-button-text-text-container">
                                <div class="side-button-text-text-first">Prevenzione della</div>
                                <div class="side-button-text-text-second">Corruzione</div>
                            </div>
                            <div class="side-button-text-icon-container">
                                <div class="side-button-text-icon-content"><img src="http://apsppieve.chebellagiornata.it/wp-content/uploads/2024/03/BAN.svg" alt="Ban Icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}

add_shortcode('sidebar_buttons', 'sidebar_buttons_shortcode');
