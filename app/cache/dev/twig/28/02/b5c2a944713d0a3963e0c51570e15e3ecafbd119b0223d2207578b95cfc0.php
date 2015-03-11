<?php

/* AbloqovVisioplusBundle:Marque:index.html.twig */
class __TwigTemplate_2802b5c2a944713d0a3963e0c51570e15e3ecafbd119b0223d2207578b95cfc0 extends Twig_Template
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
                        <span>Marques</span>
                        <p class=\"green\">
                            ";
        // line 53
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
            \t<!--<h2>ENREGISTREMENT MONTURES </h2>-->
                <div class=\"block\">
                <h1>GESTION DES MARQUES DE MONTURES</h1>
                \t<div class=\"marque\">
                            \t<table class=\"data display datatable\" >
                                \t<thead>
                                    \t<th>N°</th>
                                        <th> MARQUES </th>
                                        <th> MONTURES </th>
                                        <th> HOMMES </th>
                                        <th> FEMMES </th>
                                        <th> ENFANTS </th>
                                        <th> MIXTES </th>
                                        <th> ACTIONS </th>
                                    </thead>
                                    <tbody>
                                        ";
        // line 82
        $context["numero"] = 0;
        // line 83
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marques"]) ? $context["marques"] : $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 84
            echo "                                            <tr class=\"\">
                                            ";
            // line 85
            $context["numero"] = ((isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")) + 1);
            // line 86
            echo "                                                <td>";
            echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")), "html", null, true);
            echo "</td>
                                                <td class=\"a-gauche\"> ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "libelle", array()), "html", null, true);
            echo " </td>
                                                <td> ";
            // line 88
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AbloqovVisioplusBundle:Marque:nbmonture", array("id" => $this->getAttribute($context["marque"], "id", array()))));
            echo "</td>
                                                <td> ";
            // line 89
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AbloqovVisioplusBundle:Marque:nbmonturehomme", array("id" => $this->getAttribute($context["marque"], "id", array()))));
            echo " </td>
                                                <td> ";
            // line 90
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AbloqovVisioplusBundle:Marque:nbmonturefemme", array("id" => $this->getAttribute($context["marque"], "id", array()))));
            echo "  </td>
                                                <td> ";
            // line 91
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AbloqovVisioplusBundle:Marque:nbmontureenfant", array("id" => $this->getAttribute($context["marque"], "id", array()))));
            echo " </td>
                                                <td> ";
            // line 92
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AbloqovVisioplusBundle:Marque:nbmonturemixte", array("id" => $this->getAttribute($context["marque"], "id", array()))));
            echo " </td>
                                                <td>
                                                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_edit", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\" title=\"Modifier la marque\"><i class=\"icon-copy\"></i></a> 
                                                    &nbsp; | &nbsp; 
                                                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_show", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\" title=\"Voir les details de la marque\"> <i class=\"icon-search\"> </i></a>
                                                </td> 
                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                    </tbody>
                                </table>
                                <div class=\"aller-page\">
                                <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("marque_new");
        echo "\"><i class=\"icon-plus\"></i> Ajouter une marque</a>
                                </div>
                    \t</div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            
            
        </div>
        

    
";
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Marque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 104,  251 => 101,  240 => 96,  235 => 94,  230 => 92,  226 => 91,  222 => 90,  218 => 89,  214 => 88,  210 => 87,  205 => 86,  203 => 85,  200 => 84,  195 => 83,  193 => 82,  161 => 53,  150 => 44,  147 => 43,  130 => 29,  126 => 28,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  83 => 16,  80 => 15,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
