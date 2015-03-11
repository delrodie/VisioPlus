<?php

/* AbloqovVisioplusBundle:Monture:edit.html.twig */
class __TwigTemplate_26e1dad067e066e56b6893e7197a756dda9f77e7b2cbd8ce534c499a74fc1de2 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["MontureSolaire"]) ? $context["MontureSolaire"] : $this->getContext($context, "MontureSolaire")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Mixtes</span>
                        <p class=\"green\">
                            ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["MontureMixte"]) ? $context["MontureMixte"] : $this->getContext($context, "MontureMixte")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Hommes</span>
                        <p class=\"blue\">
                            ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["MontureHomme"]) ? $context["MontureHomme"] : $this->getContext($context, "MontureHomme")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Femmes</span>
                        <p class=\"red\">
                            ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["MontureFemme"]) ? $context["MontureFemme"] : $this->getContext($context, "MontureFemme")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Enfants</span>
                        <p class=\"yellow\">
                            ";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["MontureEnfant"]) ? $context["MontureEnfant"] : $this->getContext($context, "MontureEnfant")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Montures</span>
                        <p class=\"purple\">
                            ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["NombreTotalMonture"]) ? $context["NombreTotalMonture"] : $this->getContext($context, "NombreTotalMonture")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("monture_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo "> 
                    <table border=\"1\" class=\"montures\">
                        ";
        // line 111
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors')) {
            // line 112
            echo "                            <tr>
                                <td colspan=\"7\" class=\"message\">
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
            echo "
                                </td>
                            </tr>
                        ";
        }
        // line 119
        echo "                        ";
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marque", array()), 'errors')) {
            // line 120
            echo "                            <tr>
                                <td colspan=\"7\" class=\"message\">
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marque", array()), 'errors');
            echo "
                                    ";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'errors');
            echo "
                                </td>
                            </tr>
                        ";
        }
        // line 128
        echo "                        ";
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'errors')) {
            // line 129
            echo "                            <tr>
                                <td colspan=\"7\" class=\"message\">
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'errors');
            echo "
                                </td>
                            </tr>
                            
                        ";
        }
        // line 137
        echo "                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marque", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "marque", array()), 'widget');
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\">
                            <td colspan=\"7\" class=\"message\">
                                ";
        // line 156
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "genre", array()), 'errors')) {
            // line 157
            echo "                            \t
                                    <i class=\"icon-warning\"></i>  
                                    ";
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "genre", array()), 'errors');
            echo "
                                
                                ";
        } elseif (        // line 161
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix_vente", array()), 'errors')) {
            // line 162
            echo "                                    
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 164
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix_vente", array()), 'errors');
            echo "
                                    
                                ";
        }
        // line 167
        echo "                            </td>
                            
                        </tr>
                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "genre", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "genre", array()), 'widget');
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix_vente", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix_vente", array()), 'widget');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\">
                            <td colspan=\"7\" class=\"message\">
                                ";
        // line 189
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "stock", array()), 'errors')) {
            // line 190
            echo "                                    
                                    <i class=\"icon-warning\"></i> 
                                    ";
            // line 192
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "stock", array()), 'errors');
            echo "
                                    
                                ";
        }
        // line 195
        echo "                            </td>
                            
                        </tr>
                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "stock", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "stock", array()), 'widget');
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
        // line 215
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr>
                            <td colspan=\"7\" class=\"retour-page\">
                                <a href=\"";
        // line 222
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
        return "AbloqovVisioplusBundle:Monture:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 222,  442 => 215,  428 => 204,  421 => 200,  414 => 195,  408 => 192,  404 => 190,  402 => 189,  394 => 184,  387 => 180,  380 => 176,  373 => 172,  366 => 167,  360 => 164,  356 => 162,  354 => 161,  349 => 159,  345 => 157,  343 => 156,  335 => 151,  328 => 147,  321 => 143,  314 => 139,  310 => 137,  302 => 132,  297 => 129,  294 => 128,  287 => 124,  283 => 123,  278 => 120,  275 => 119,  268 => 115,  263 => 112,  261 => 111,  254 => 109,  233 => 91,  224 => 85,  215 => 79,  206 => 73,  197 => 67,  188 => 61,  177 => 52,  174 => 51,  158 => 38,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  84 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
