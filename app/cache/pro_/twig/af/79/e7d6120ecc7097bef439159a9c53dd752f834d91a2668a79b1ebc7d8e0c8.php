<?php

/* AbloqovVisioplusBundle:Monture:new.html.twig */
class __TwigTemplate_af79e7d6120ecc7097bef439159a9c53dd752f834d91a2668a79b1ebc7d8e0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AbloqovVisioplusBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'styleCSS' => array($this, 'block_styleCSS'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AbloqovVisioplusBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_styleCSS($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("styleCSS", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/reset.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/text.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/grid.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/layout.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/nav.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <!--[if IE 6]><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/ie6.css"), "html", null, true);
        echo "\" media=\"screen\" /><![endif]-->
    <!--[if IE 7]><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/ie.css"), "html", null, true);
        echo "\" media=\"screen\" /><![endif]--> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/jquery.jqplot.min.css"), "html", null, true);
        echo "\" /> 
    
";
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "<!-- BEGIN: load jquery -->
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-1.6.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.widget.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.effects.core.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.effects.slide.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <!--[if lt IE 9]><script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/excanvas.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/jquery.jqplot.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.barRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.pieRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.highlighter.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.pointLabels.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.donutRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <!-- END: load jqplot -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/setup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script type=\"text/javascript\">

        \$(document).ready(function () {
            setupLeftMenu();

          \t\t\tsetSidebarHeight();


        });
    </script>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "     
    
    <div class=\"grid_10\">
            
        <div class=\"box round\">
            <h2>Statistiques</h2>
            <div class=\"stat-col\">
                        <span>Solaires</span>
                        <p class=\"darkblue\">
                            ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["MontureSolaire"]) ? $context["MontureSolaire"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Mixtes</span>
                        <p class=\"green\">
                            ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["MontureMixte"]) ? $context["MontureMixte"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Hommes</span>
                        <p class=\"blue\">
                            ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["MontureHomme"]) ? $context["MontureHomme"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Femmes</span>
                        <p class=\"red\">
                            ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["MontureFemme"]) ? $context["MontureFemme"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Enfants</span>
                        <p class=\"yellow\">
                            ";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["MontureEnfant"]) ? $context["MontureEnfant"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Montures</span>
                        <p class=\"purple\">
                            ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["NombreTotalMonture"]) ? $context["NombreTotalMonture"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
            <div class=\"block\">
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
            <!-- / ZONE STATISTIQUES -->
    </div>
    
    <div class=\"grid_10\">
            
        <!-- TABLEAU D'ENREGISTREMENT -->
        <div class=\"box round\">
            <div class=\"block\">
                <h1>GESTION DES MONTURES</h1>
                    
                    <form action=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("monture_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "> 
                    <table border=\"1\" class=\"montures\">
                        ";
        // line 111
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 112
            echo "                    \t<tr>
                            <td colspan=\"7\" class=\"message\">
                            \t<i class=\"icon-warning\"></i> 
                                
                                
                                ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marque", array()), 'errors');
            echo "
                                ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reference", array()), 'errors');
            echo "
                            </td>
                        </tr>
                        ";
        }
        // line 123
        echo "                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marque", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marque", array()), 'widget');
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reference", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reference", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\">
                            <td colspan=\"7\" class=\"message\">
                                ";
        // line 142
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genre", array()), 'errors')) {
            // line 143
            echo "                            \t
                                    <i class=\"icon-warning\"></i>  
                                    ";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genre", array()), 'errors');
            echo "
                                
                                ";
        } elseif (        // line 147
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix_vente", array()), 'errors')) {
            // line 148
            echo "                                    
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 150
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix_vente", array()), 'errors');
            echo "
                                    
                                ";
        }
        // line 153
        echo "                            </td>
                            
                        </tr>
                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genre", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genre", array()), 'widget');
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix_vente", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix_vente", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\">
                            <td colspan=\"7\" class=\"message\">
                                ";
        // line 175
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'errors')) {
            // line 176
            echo "                                    
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 178
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'errors');
            echo "
                                    
                                ";
        }
        // line 181
        echo "                            </td>
                            
                        </tr>
                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "stock", array()), 'widget');
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                        </tr>
                        <tr class=\"seperateurV\"></tr>
                    \t<tr>
                            <td class=\"\"></td>
                            <td class=\"\"></td>
                            <td class=\"\"></td>
                            <td class=\"separateur2\"></td>
                            <td class=\"bouton-validation\" colspan=\"3\">
                                ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr>
                            <td colspan=\"7\" class=\"retour-page\">
                                <a href=\"";
        // line 208
        echo $this->env->getExtension('routing')->getPath("monture");
        echo "\"><i class=\"icon-undo\"></i> Retour à la liste des montures</a>
                            </td>
                        </tr>
                    </table>
                    </form>  
                <div class=\"clear\"></div>
            </div>
        </div>
            
            
    </div>            
   

    
";
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Monture:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 208,  417 => 201,  403 => 190,  396 => 186,  389 => 181,  383 => 178,  379 => 176,  377 => 175,  369 => 170,  362 => 166,  355 => 162,  348 => 158,  341 => 153,  335 => 150,  331 => 148,  329 => 147,  324 => 145,  320 => 143,  318 => 142,  310 => 137,  303 => 133,  296 => 129,  289 => 125,  285 => 123,  278 => 119,  274 => 118,  270 => 117,  263 => 112,  261 => 111,  254 => 109,  233 => 91,  224 => 85,  215 => 79,  206 => 73,  197 => 67,  188 => 61,  177 => 52,  174 => 51,  158 => 38,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  84 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
