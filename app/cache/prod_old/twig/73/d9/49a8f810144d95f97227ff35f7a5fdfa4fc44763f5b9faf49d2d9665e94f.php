<?php

/* AbloqovVisioplusBundle:Marque:nbmonturefemme.html.twig */
class __TwigTemplate_73d949a8f810144d95f97227ff35f7a5fdfa4fc44763f5b9faf49d2d9665e94f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["montureFemme"]) ? $context["montureFemme"] : $this->getContext($context, "montureFemme")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Marque:nbmonturefemme.html.twig";
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
