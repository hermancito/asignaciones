<?php

/* base.html.twig */
class __TwigTemplate_65f1d69c8d9c9c71a02e4fd4b2ddafbac6b5998617d1d07c33960aef2cd57e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b572eb7d607cbcc4b55a2a5777ef707c4f479adbcfbd5b1a8b183797520a7df9 = $this->env->getExtension("native_profiler");
        $__internal_b572eb7d607cbcc4b55a2a5777ef707c4f479adbcfbd5b1a8b183797520a7df9->enter($__internal_b572eb7d607cbcc4b55a2a5777ef707c4f479adbcfbd5b1a8b183797520a7df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_b572eb7d607cbcc4b55a2a5777ef707c4f479adbcfbd5b1a8b183797520a7df9->leave($__internal_b572eb7d607cbcc4b55a2a5777ef707c4f479adbcfbd5b1a8b183797520a7df9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d0ab169f09de67dcbb40a68392ebbc26221d904f52857985256ba33d3276025 = $this->env->getExtension("native_profiler");
        $__internal_2d0ab169f09de67dcbb40a68392ebbc26221d904f52857985256ba33d3276025->enter($__internal_2d0ab169f09de67dcbb40a68392ebbc26221d904f52857985256ba33d3276025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d0ab169f09de67dcbb40a68392ebbc26221d904f52857985256ba33d3276025->leave($__internal_2d0ab169f09de67dcbb40a68392ebbc26221d904f52857985256ba33d3276025_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc02d2556dce295003aca7e07ae54810ded6d030b923f9c12868c6d9a7d116f9 = $this->env->getExtension("native_profiler");
        $__internal_cc02d2556dce295003aca7e07ae54810ded6d030b923f9c12868c6d9a7d116f9->enter($__internal_cc02d2556dce295003aca7e07ae54810ded6d030b923f9c12868c6d9a7d116f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "             
        ";
        
        $__internal_cc02d2556dce295003aca7e07ae54810ded6d030b923f9c12868c6d9a7d116f9->leave($__internal_cc02d2556dce295003aca7e07ae54810ded6d030b923f9c12868c6d9a7d116f9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e7b8a5aa6babb0c4475046ba11baa7a1b386778bdbab6dbbaf29ba85043959e = $this->env->getExtension("native_profiler");
        $__internal_5e7b8a5aa6babb0c4475046ba11baa7a1b386778bdbab6dbbaf29ba85043959e->enter($__internal_5e7b8a5aa6babb0c4475046ba11baa7a1b386778bdbab6dbbaf29ba85043959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "            
        ";
        
        $__internal_5e7b8a5aa6babb0c4475046ba11baa7a1b386778bdbab6dbbaf29ba85043959e->leave($__internal_5e7b8a5aa6babb0c4475046ba11baa7a1b386778bdbab6dbbaf29ba85043959e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8adc41b268bf9cc1ea4928deec9ede407979a73012bd2c8074aa3752d97d96d4 = $this->env->getExtension("native_profiler");
        $__internal_8adc41b268bf9cc1ea4928deec9ede407979a73012bd2c8074aa3752d97d96d4->enter($__internal_8adc41b268bf9cc1ea4928deec9ede407979a73012bd2c8074aa3752d97d96d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "           
        ";
        
        $__internal_8adc41b268bf9cc1ea4928deec9ede407979a73012bd2c8074aa3752d97d96d4->leave($__internal_8adc41b268bf9cc1ea4928deec9ede407979a73012bd2c8074aa3752d97d96d4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  99 => 15,  91 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 18,  47 => 15,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*              */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*            */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
