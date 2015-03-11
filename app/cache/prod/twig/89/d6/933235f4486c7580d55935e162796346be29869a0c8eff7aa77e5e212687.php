<?php

/* AbloqovUtilisateurBundle::connexion.html.twig */
class __TwigTemplate_89d6933235f4486c7580d55935e162796346be29869a0c8eff7aa77e5e212687 extends Twig_Template
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
        echo "<div>
    ";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "        
        <span class=\"button\"> <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecté", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></span>
        <span class=\"register\"><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("acteur");
            echo "\">Retour</span>
        
    ";
        } else {
            // line 8
            echo "        <span class=\"button\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se connecter", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></span>
        <span class=\"register\"><a href=\"http://www.vision-originale.net/\" target=\"_blank\">Annuler</span>
    ";
        }
        // line 11
        echo "</div>

    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "flashes"), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 14
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["fash"]) ? $context["fash"] : null), "html", null, true);
            echo "\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["key"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AbloqovUtilisateurBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  56 => 14,  52 => 13,  48 => 11,  39 => 8,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
