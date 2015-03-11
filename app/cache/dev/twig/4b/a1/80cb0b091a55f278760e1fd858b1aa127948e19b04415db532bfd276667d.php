<?php

/* AbloqovVisioplusBundle:Monture:show.html.twig */
class __TwigTemplate_4ba180cb0b091a55f278760e1fd858b1aa127948e19b04415db532bfd276667d extends Twig_Template
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

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "     
    
    <div class=\"grid_10\">
            
        <div class=\"box round\">
            <h2>Statistiques</h2>
            <div class=\"stat-col\">
                        <span>Solaires</span>
                        <p class=\"darkblue\">
                            ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["MontureSolaire"]) ? $context["MontureSolaire"] : $this->getContext($context, "MontureSolaire")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Mixtes</span>
                        <p class=\"green\">
                            ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["MontureMixte"]) ? $context["MontureMixte"] : $this->getContext($context, "MontureMixte")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Hommes</span>
                        <p class=\"blue\">
                            ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["MontureHomme"]) ? $context["MontureHomme"] : $this->getContext($context, "MontureHomme")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Femmes</span>
                        <p class=\"red\">
                            ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["MontureFemme"]) ? $context["MontureFemme"] : $this->getContext($context, "MontureFemme")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Enfants</span>
                        <p class=\"yellow\">
                            ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["MontureEnfant"]) ? $context["MontureEnfant"] : $this->getContext($context, "MontureEnfant")), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Montures</span>
                        <p class=\"purple\">
                            ";
        // line 92
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
                     
                    <table border=\"1\" class=\"montures-consultation\">
                    \t<tr>
                            <td class=\"libelle\">
                                Marque
                            </td>
                            <td class=\"seperateur1\"> : </td>
                            <td class=\"text-input\">
                                ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monture"]) ? $context["monture"] : $this->getContext($context, "monture")), "marque", array()), "html", null, true);
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                Refernce
                            </td>
                            <td class=\"seperateur1\"> : </td>
                            <td class=\"text-input\">
                                ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monture"]) ? $context["monture"] : $this->getContext($context, "monture")), "reference", array()), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\">
                            <td colspan=\"7\" class=\"message\"></td>
                            
                        </tr>
                    \t<tr>
                            <td class=\"libelle\">
                                Genre
                            </td>
                            <td class=\"seperateur1\"> : </td>
                            <td class=\"text-input\">
                                ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monture"]) ? $context["monture"] : $this->getContext($context, "monture")), "genre", array()), "html", null, true);
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                Prix de vente
                            </td>
                            <td class=\"seperateur1\"> : </td>
                            <td class=\"text-input\">
                                ";
        // line 146
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["monture"]) ? $context["monture"] : $this->getContext($context, "monture")), "prixvente", array()), "0", "", "."), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\">
                            <td colspan=\"7\" class=\"message\"></td>
                            
                        </tr>
                    \t<tr>
                            <td class=\"libelle\">
                                Quantité en stock
                            </td>
                            <td class=\"seperateur1\"> : </td>
                            <td class=\"text-input\">
                                ";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["monture"]) ? $context["monture"] : $this->getContext($context, "monture")), "stock", array()), "html", null, true);
        echo "
                            </td>
                            <td class=\"separateur2\"></td>
                            <td class=\"libelle\">
                                Date de création
                            </td>
                            <td class=\"seperateur1\"> : </td>
                            <td class=\"text-input\">
                                ";
        // line 167
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["monture"]) ? $context["monture"] : $this->getContext($context, "monture")), "datecreationAt", array()), "d/m/Y"), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr class=\"seperateurV\"></tr>
                    \t<tr>
                            <td class=\"\"></td>
                            <td class=\"\"></td>
                            <td class=\"\"></td>
                            <td class=\"separateur2\"></td>
                            <td class=\"bouton-validation\" colspan=\"3\">
                                ";
        // line 178
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                            </td>
                        </tr>
                    \t<tr>
                            <td class=\"separateur2\"></td>
                        </tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr class=\"seperateurV\"></tr>
                        <tr>
                            <td colspan=\"7\" class=\"retour-page\">
                                <a href=\"";
        // line 188
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
        return "AbloqovVisioplusBundle:Monture:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 188,  340 => 178,  326 => 167,  315 => 159,  299 => 146,  288 => 138,  272 => 125,  261 => 117,  233 => 92,  224 => 86,  215 => 80,  206 => 74,  197 => 68,  188 => 62,  177 => 53,  174 => 52,  158 => 38,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  91 => 19,  87 => 18,  84 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
