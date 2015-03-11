<?php

/* AbloqovUtilisateurBundle::flag2.html.twig  */
class __TwigTemplate_543b209e814f6b09f1fe8f67078eb70b6fb876c2d559db2d6d56f9a177c44cc9 extends Twig_Template
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
<title>VISIO+ 0.1</title>

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

<!--LOGIN FORM-->
<form name=\"login-form\" class=\"login-form\" action=\"\" method=\"post\">

\t<!--HEADER-->
    <div class=\"header\">
    <!--TITLE--><h1>VISIO+ 0.1</h1><!--END TITLE-->
    <!--DESCRIPTION--><span><!--Fill out the form below to login to my super awesome imaginary control panel-->.</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
    
    <!--FOOTER-->
    <div class=\"footer\">
        
         ";
        // line 64
        $this->env->loadTemplate("AbloqovUtilisateurBundle::connexion.html.twig")->display($context);
        // line 65
        echo "    
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class=\"gradient\"></div><!--END GRADIENT-->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AbloqovUtilisateurBundle::flag2.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 65,  90 => 64,  40 => 17,  36 => 16,  19 => 1,);
    }
}
