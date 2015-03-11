<?php

/* AbloqovVisioplusBundle:Monture:index.html.twig */
class __TwigTemplate_46728846049ef51f415e2474bcbcb87bfbb6a6da3523126eb5191c17ab35c8fa extends Twig_Template
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
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/css/table/demo_page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />    
";
    }

    // line 15
    public function block_javascript($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <!-- BEGIN: load jquery -->
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.effects.slide.min.js "), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
   <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/jquery-ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/table/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END: load jquery -->
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/table/table.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/js/setup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">

        \$(document).ready(function () {
            setupLeftMenu();

            \$('.datatable').dataTable();
\t\t\tsetSidebarHeight();


        });
    </script>   
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "    
    
 <div class=\"grid_10\">
            
            <div class=\"box round\">
            \t<h2>Statistiques</h2>
                    <div class=\"stat-col\">
                        <span>Solaires</span>
                        <p class=\"darkblue\">
                            ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["MontureSolaire"]) ? $context["MontureSolaire"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Mixtes</span>
                        <p class=\"green\">
                            ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["MontureMixte"]) ? $context["MontureMixte"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Hommes</span>
                        <p class=\"blue\">
                            ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["MontureHomme"]) ? $context["MontureHomme"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Femmes</span>
                        <p class=\"red\">
                            ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["MontureFemme"]) ? $context["MontureFemme"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Enfants</span>
                        <p class=\"yellow\">
                            ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["MontureEnfant"]) ? $context["MontureEnfant"] : null), "html", null, true);
        echo "
                        </p>
                    </div>
                    <div class=\"stat-col\">
                        <span>Montures</span>
                        <p class=\"purple\">
                            ";
        // line 83
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

            
            <!-- TABLEAU D'ENREGISTREMENT -->
            <div class=\"box round\">
                <div class=\"block\">
                <h1>GESTION DES MONTURES</h1>
                <div class=\"monture\">
                   <table class=\"data display datatable\" >
                                \t<thead>
                                    \t<th>N°</th>
                                        <th> MARQUES </th>
                                        <th> REFERENCES </th>
                                        <th> GENRE </th>
                                        <th> PRIX </th>
                                        <th> STOCK </th>
                                        <th> CREATION</th>
                                        <th> ACTIONS </th>
                                    </thead>
                                    <tbody>
                                        ";
        // line 111
        $context["numero"] = 0;
        // line 112
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["montures"]) ? $context["montures"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["monture"]) {
            // line 113
            echo "                                            <tr class=\"\">
                                            ";
            // line 114
            $context["numero"] = ((isset($context["numero"]) ? $context["numero"] : null) + 1);
            // line 115
            echo "                                            <td>";
            echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : null), "html", null, true);
            echo "</td>
                                            <td class=\"a-gauche\"> ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "marque", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "reference", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "genre", array()), "html", null, true);
            echo " </td>
                                            <td class=\"a-droite\"> ";
            // line 119
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["monture"], "prixvente", array()), "0", "", "."), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "stock", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 121
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["monture"], "datecreationAt", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                            <td>
                                                <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("monture_edit", array("id" => $this->getAttribute($context["monture"], "id", array()))), "html", null, true);
            echo "\" title=\"Modifier la monture\"><i class=\"icon-copy\"></i></a> 
                                                &nbsp; | &nbsp; 
                                                <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("monture_show", array("id" => $this->getAttribute($context["monture"], "id", array()))), "html", null, true);
            echo "\" title=\"Voir les details de la monture\"> <i class=\"icon-search\"> </i></a>
                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </tbody>
                                </table>
                                <div class=\"aller-page\">
                                <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("monture_new");
        echo "\"><i class=\"icon-plus\"></i> Ajouter une monture</a>
                                </div>
                                </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            
            
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Monture:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 132,  294 => 129,  284 => 125,  279 => 123,  274 => 121,  270 => 120,  266 => 119,  262 => 118,  258 => 117,  254 => 116,  249 => 115,  247 => 114,  244 => 113,  239 => 112,  237 => 111,  206 => 83,  197 => 77,  188 => 71,  179 => 65,  170 => 59,  161 => 53,  150 => 44,  147 => 43,  130 => 29,  126 => 28,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  83 => 16,  80 => 15,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
