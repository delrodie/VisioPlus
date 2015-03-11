<?php

/* AbloqovVisioplusBundle:Marque:nbmonture.html.twig */
class __TwigTemplate_e270038bc3e430955aab8cff436f114f1587d866530124dc4cc9a960bb1ee36c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["nombreMonture"]) ? $context["nombreMonture"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Marque:nbmonture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
