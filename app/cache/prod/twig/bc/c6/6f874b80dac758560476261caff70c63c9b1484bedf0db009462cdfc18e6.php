<?php

/* AbloqovVisioplusBundle:Marque:nbmontureenfant.html.twig */
class __TwigTemplate_bcc66f874b80dac758560476261caff70c63c9b1484bedf0db009462cdfc18e6 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["montureEnfant"]) ? $context["montureEnfant"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Marque:nbmontureenfant.html.twig";
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
