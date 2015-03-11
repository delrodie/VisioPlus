<?php

/* AbloqovVisioplusBundle::layout.html.twig */
class __TwigTemplate_2f107cac547b6b66004bfad1585ddb6b7c812c2863e7dc2c6cc178b0a641152d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styleCSS' => array($this, 'block_styleCSS'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/images/favicon.fw.png"), "html", null, true);
        echo "\" />
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    
    ";
        // line 12
        $this->displayBlock('styleCSS', $context, $blocks);
        // line 15
        echo "    
    ";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo "    
    
</head>
<body>
    <div class=\"container_12\">
        <div class=\"grid_12 header-repeat\">
            <div id=\"branding\">
                <div class=\"floatleft\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/images/logo.fw.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                <div class=\"floatright\">
                    <div class=\"floatleft\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/images/img-profile.jpg"), "html", null, true);
        echo "\" alt=\"Photo de profile\" /></div>
                    <div class=\"floatleft marginleft10\">
                        <ul class=\"inline-ul floatleft\">
                            
                            ";
        // line 34
        $this->env->loadTemplate("AbloqovUtilisateurBundle::connecte.html.twig")->display($context);
        // line 35
        echo "                        </ul>
                        <br />
                        <!--<span class=\"small grey\">Last Login: 3 hours ago</span>-->
                    </div>
                </div>
                <div class=\"clear\">
                </div>
            </div>
        </div>
        <div class=\"clear\">
        </div>
        <div class=\"grid_12\">
            <ul class=\"nav main\">
                <li class=\"ic-dashboard\"><a href=\"\"><span>Tableau de bord</span></a></li>
                <li class=\"ic-form-style\"><a href=\"javascript:\"><span>Assurances</span></a></li>
                <li class=\"ic-client\"><a href=\"\"><span>Clients</span></a></li>
\t\t\t\t<li class=\"ic-facturation\"><a href=\"\"><span>Facturations</span></a></li>
                <li class=\"ic-montures\"><a href=\"javascript:\"><span>Montures</span></a>
               \t\t <ul>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("marque");
        echo "\">Marques</a> </li>
                        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("monture");
        echo "\">Montures</a> </li>
                        <li><a href=\"\">Fournisseurs</a> </li>
                        <li><a href=\"\">Approvisionnements</a> </li>
                    </ul>
                </li>
                <li class=\"ic-facturation\"><a href=\"\"><span>Règlements</span></a></li>
                <li class=\"ic-notifications\"><a href=\" \"><span>Traitements</span></a></li>
                <li class=\"ic-verre\"><a href=\"javascript:\"><span>Verres</span></a>
               \t\t <ul>
                        <li><a href=\" \">Types verres</a> </li>
                        <li><a href=\" \">Fournisseurs</a> </li>
                        <li><a href=\" \">Approvisionnements</a> </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class=\"clear\">
        </div>
        <div class=\"grid_2\">
            <div class=\"box sidemenu\">
                <div class=\"block\" id=\"section-menu\">
                    <ul class=\"section menu\">
                        <li><a class=\"menuitem\">Tableau de bord</a>
                            <ul class=\"submenu\">
                                <li><a>Assurances</a> </li>
                                <li><a>ventes</a> </li>
                                <li><a>Montures</a> </li>
                                <li><a>Verres</a> </li>
                                <li><a>Règlements</a> </li>
                              
                            </ul>
                        </li>
                        <li><a class=\"menuitem\">Utilisateurs</a>
                            <ul class=\"submenu\">
                                <li><a>Ajouter</a> </li>
                                <li><a>Modifier</a> </li>
                                <li><a>Supprimer</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        ";
        // line 100
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "        
        <div class=\"clear\">
        </div>
    </div>
    <div class=\"clear\">
    </div>
    <div id=\"site_info\">
        <div class=\"zone-signature\">
        \t<div class=\"gauche\">
            \t <strong><span class=\"grand-format\">&copy; &nbsp;<a href=\"http://www.abloqov-group.com/applications/visio+/\" target=\"_blank\"> VISIO+</a></span></strong>
                 <span class=\"version\">v 0.1</span> 
                 <span class=\"separateur\">| </span>
                 <span class=\"annee\">2015</span>
            \t<span class=\"mise-a-jour\">Dernière mise à jour Mars 2015</span>
            </div>
        \t<div class=\"gauche\">
            </div>
            <div class=\"droite\">
            \tBy <a href=\"http://wwww.abloqov-group.com/\" target=\"_blank\">ABLOQOV GROUP</a>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "            Visio + 0.1 :: Système de gestion des officines d'optique
        ";
    }

    // line 12
    public function block_styleCSS($context, array $blocks = array())
    {
        // line 13
        echo "       <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/iconFont.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    ";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "        
    ";
    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
        // line 101
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 101,  201 => 100,  196 => 17,  193 => 16,  186 => 13,  183 => 12,  178 => 8,  175 => 7,  147 => 103,  145 => 100,  97 => 55,  93 => 54,  72 => 35,  70 => 34,  63 => 30,  57 => 27,  47 => 19,  45 => 16,  42 => 15,  40 => 12,  36 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }
}
