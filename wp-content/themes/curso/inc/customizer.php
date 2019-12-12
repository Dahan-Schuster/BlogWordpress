<?php

/**
 * Configura o Theme Customizer.
 * 
 * O Theme Customizer está disponível no menu 'Personalizar' do painel do WordPress
 * Esta ferramenta disponibiliza um Painel com Seções separadas em funcionalidades,
 * e uma visualização ao vivo das alterações feitas no site através do painel.
 * 
 * Para customizar o Theme Customizer, existe a API Customize, que é orientada a objetos.
 * 
 * Cada Seção possui uma série de Controles responsáveis por alterar a aparência do site.
 * Um objeto de configurações (settings) está associado a cada Controle, sendo este último
 * um elemento visível ao usuário e o primeiro uma série informações salvas no banco de dados.
 * Ao mexer em um Controle, o objeto Settings é enviado do PHP para o Js da página
 * ao vivo. O Js então maniupula o objeto settings e carrega a visualização em tempo real.
 * 
 * O método abaixo adiciona alguns painéis de controles ao Theme Customizer.
 * Para funcionar, deve ser chamado (require()) dentro de um arquivo autocarregado do WP (como o functions.php)
 * 
 * Mais informações em: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 * 
 * @param WP_Customize_Manager $wp_customize - objeto que contém os métodos responsáveis por 
 *  gerenciar o Theme Customizer do painel do WordPress
 */
function wp_customizer($wp_customize)
{

    # Seção Copyright

    // Adiciona uma seção para edição do Copyright
    $wp_customize->add_section(
        'sec_copyright',    // id da seção
        array(              // Detalhes da seção
            'title' => 'Copyright',
            'description' => 'Copyright section'
        )
    );

    // Cria um objeto Settings para ser enviado ao Js
    // durante a edição no Theme Customizer
    $wp_customize->add_setting(
        'set_copyright',    // id da configuração
        array(              // configurações da configuração 😆
            'type' => 'theme_mod',
            'default' => 'Copyright X - All rights reserved',
            // Filtra o campo que o usuário deverá preencher com informações.
            // O filtro evita erros no código e até falhas de segurança.
            // Existem filtros para vários tipos de input, veja mais no site:
            // https://divpusher.com/blog/wordpress-customizer-sanitization-examples
            // O filtro abaixo remove todo o HTML de input de texto
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'set_copyright',    // id da configuração a qual o controle está associado
        array(
            'label' => 'Copyright',
            'description' => 'Choose wheter to show the Services section or not',
            'section' => 'sec_copyright', // Seção em que o controle deve ficar
            'type' => 'text'
        )
    );
}

add_action( 'customize_register', 'wp_customizer' );