<?php

/* AbloqovUtilisateurBundle::connecte.html.twig */
class __TwigTemplate_2a3402605f4987efd70473f241edf2abacf4017e26f5c7dcaaa7fe97a3f98796 extends Twig_Template
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
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</a> </li>
        <li> <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se deconnecter", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
    ";
        } else {
            // line 6
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se connecter", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateur", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 9
        echo "</div>

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "flashes"), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 12
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["fash"]) ? $context["fash"] : null), "html", null, true);
            echo "\">
            ";
            // line 13
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
        return "AbloqovUtilisateurBundle::connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  60 => 12,  56 => 11,  52 => 9,  45 => 7,  38 => 6,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
