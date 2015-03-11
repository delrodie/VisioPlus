<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_769de7b3d7c61938e7d041dc1267dacfbcbfd96c016cd788699ee07f3bb3c785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>

<!--------------------
LOGIN FORM
by: Amit Jakhu
www.amitjakhu.com
--------------------->

<!--META-->
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovutilisateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/abloqovvisioplus/images/favicon.fw.png"), "html", null, true);
        echo "\" />

<!--SCRIPTS-->
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js\"></script>
<!--Slider-in icons-->
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$(\".username\").focus(function() {
\t\t\$(\".user-icon\").css(\"left\",\"-48px\");
\t});
\t\$(\".username\").blur(function() {
\t\t\$(\".user-icon\").css(\"left\",\"0px\");
\t});
\t
\t\$(\".password\").focus(function() {
\t\t\$(\".pass-icon\").css(\"left\",\"-48px\");
\t});
\t\$(\".password\").blur(function() {
\t\t\$(\".pass-icon\").css(\"left\",\"0px\");
\t});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id=\"wrapper\">

\t<!--SLIDE-IN ICONS-->
    <div class=\"user-icon\"></div>
    <div class=\"pass-icon\"></div>
    <!--END SLIDE-IN ICONS-->



\t
    
";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "

<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class=\"gradient\"></div><!--END GRADIENT-->

</body>
</html>";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 56,  99 => 55,  85 => 58,  83 => 55,  42 => 17,  38 => 16,  21 => 1,);
    }
}
