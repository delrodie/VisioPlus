<?php

/* AbloqovVisioplusBundle:Marque:nbmonturehomme.html.twig */
class __TwigTemplate_a6bf1f5b99f21a72a4828805d3f6e034e3752facb0490c3df4ad9ac168d90366 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["montureHomme"]) ? $context["montureHomme"] : $this->getContext($context, "montureHomme")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Marque:nbmonturehomme.html.twig";
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
