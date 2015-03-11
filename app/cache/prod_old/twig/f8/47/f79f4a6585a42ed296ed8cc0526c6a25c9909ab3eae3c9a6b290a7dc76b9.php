<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f847f79f4a6585a42ed296ed8cc0526c6a25c9909ab3eae3c9a6b290a7dc76b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"login-form\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    
    <!--HEADER-->
    <div class=\"header\">
    <!--TITLE--><h1>Connexion</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>
    ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 17
        echo "    
    </span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
    
    <div class=\"content\">
    
        <input type=\"text\" id=\"username\"  name=\"_username\" class=\"input username\" value=\"nom d'utilisateur\" onfocus=\"this.value=''\"  required=\"required\" />
    
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"input password\" onfocus=\"this.value=''\" required=\"required\" value=\"Password\" />
    </div>
    
    <div class=\"footer\">

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Se connecter", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"button\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  63 => 17,  57 => 15,  55 => 14,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
