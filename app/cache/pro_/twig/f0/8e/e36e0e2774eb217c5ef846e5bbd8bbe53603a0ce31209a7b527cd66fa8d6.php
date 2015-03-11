<?php

/* AbloqovVisioplusBundle:Default:index.html.twig */
class __TwigTemplate_f08ee36e0e2774eb217c5ef846e5bbd8bbe53603a0ce31209a7b527cd66fa8d6 extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle::connexion.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "AbloqovVisioplusBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
