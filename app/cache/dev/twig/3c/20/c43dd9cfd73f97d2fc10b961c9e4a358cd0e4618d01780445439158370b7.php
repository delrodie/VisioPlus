<?php

/* AbloqovVisioplusBundle:Marque:new.html.twig */
class __TwigTemplate_3c20c43dd9cfd73f97d2fc10b961c9e4a358cd0e4618d01780445439158370b7 extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/reset.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/text.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/grid.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/layout.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/nav.css"), "html", null, true);
        echo "\" media=\"screen\" />
    <!--[if IE 6]><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/ie6.css"), "html", null, true);
        echo "\" media=\"screen\" /><![endif]-->
    <!--[if IE 7]><link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/ie.css"), "html", null, true);
        echo "\" media=\"screen\" /><![endif]--> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/jquery.jqplot.min.css"), "html", null, true);
        echo "\" /> 
    
";
    }

    // line 15
    public function block_javascript($context, array $blocks = array())
    {
        // line 16
        echo "<!-- BEGIN: load jquery -->
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-1.6.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.widget.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.effects.core.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.effects.slide.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <!--[if lt IE 9]><script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/excanvas.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/jquery.jqplot.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.canvasTextRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.canvasAxisLabelRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.barRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.pieRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.highlighter.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.pointLabels.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.donutRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jqPlot/plugins/jqplot.bubbleRenderer.min.js"), "html", null, true);
        echo "\"></script>
    <!-- END: load jqplot -->
    <script src=\"";
        // line 37
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

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    

 <div class=\"grid_10\">
            
            <div class=\"box round\">
            \t<h2>Statistiques</h2>
                    <div class=\"stat-col\">
                        <span>Marques</span>
                        <p class=\"green\">
                            ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["nbmarques"]) ? $context["nbmarques"] : $this->getContext($context, "nbmarques")), "html", null, true);
        echo "</p>
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
                <h1>GESTION DES MARQUES DE MONTURES</h1>
                    
                    <form action=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("marque_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
                        
                    <table border=\"1\" class=\"marque\">
                        ";
        // line 79
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 80
            echo "                    \t<tr>
                            <td colspan=\"4\" class=\"message\">
                            \t<i class=\"icon-warning\"></i> 
                                <script type=\"text/javascript\"> alert('";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "'); window.location='";
            echo $this->env->getExtension('routing')->getPath("marque");
            echo "';</script>
                                
                                ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                                ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
            echo "
                            </td>
                        </tr>
                        ";
        }
        // line 90
        echo "                    \t<tr>
                            <td class=\"libelle\">
                                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label');
        echo "
                            </td>
                            <td class=\"seperateur1\"></td>
                            <td class=\"text-input\">
                                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
                            </td>
                            <td class=\"bouton-validation\" colspan=\"3\">
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr>
                            <td colspan=\"7\" class=\"retour-page\">
                                <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("marque");
        echo "\"><i class=\"icon-undo\"></i> Retour à la liste des marques</a>
                            </td>
                        </tr>
                    </table>
                    
                    <div class=\"clear\"></div>
                </div>
            </div>
            
            
        </div>
        

    
";
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Marque:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 106,  253 => 99,  247 => 96,  240 => 92,  236 => 90,  229 => 86,  225 => 85,  218 => 83,  213 => 80,  211 => 79,  203 => 76,  184 => 60,  173 => 51,  170 => 50,  154 => 37,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  80 => 16,  77 => 15,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
