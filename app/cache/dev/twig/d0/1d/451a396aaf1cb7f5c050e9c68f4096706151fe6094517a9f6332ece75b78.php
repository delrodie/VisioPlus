<?php

/* AbloqovVisioplusBundle:Monture:liste.html.twig */
class __TwigTemplate_d01d451a396aaf1cb7f5c050e9c68f4096706151fe6094517a9f6332ece75b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "                <div class=\"monture\">
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
        // line 14
        $context["numero"] = 0;
        // line 15
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["montures"]) ? $context["montures"] : $this->getContext($context, "montures")));
        foreach ($context['_seq'] as $context["_key"] => $context["monture"]) {
            // line 16
            echo "                                            <tr class=\"\">
                                            ";
            // line 17
            $context["numero"] = ((isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")) + 1);
            // line 18
            echo "                                            <td>";
            echo twig_escape_filter($this->env, (isset($context["numero"]) ? $context["numero"] : $this->getContext($context, "numero")), "html", null, true);
            echo "</td>
                                            <td class=\"a-gauche\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "marque", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "reference", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "genre", array()), "html", null, true);
            echo " </td>
                                            <td class=\"a-droite\"> ";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["monture"], "prixvente", array()), "0", "", "."), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["monture"], "stock", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["monture"], "datecreationAt", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                            <td>
                                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("monture_edit", array("id" => $this->getAttribute($context["monture"], "id", array()))), "html", null, true);
            echo "\" title=\"Modifier la monture\"><i class=\"icon-copy\"></i></a> 
                                                &nbsp; | &nbsp; 
                                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("monture_show", array("id" => $this->getAttribute($context["monture"], "id", array()))), "html", null, true);
            echo "\" title=\"Voir les details de la monture\"> <i class=\"icon-search\"> </i></a>
                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                    </tbody>
                                </table>
                                <div class=\"aller-page\">
                                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("monture_new");
        echo "\"><i class=\"icon-plus\"></i> Ajouter une monture</a>
                                </div>
                                </div>
                    <div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Monture:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  91 => 32,  81 => 28,  76 => 26,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  46 => 18,  44 => 17,  41 => 16,  36 => 15,  34 => 14,  19 => 1,);
    }
}
