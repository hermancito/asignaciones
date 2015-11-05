<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f219883a74433165ba781ad6d60d9f4c3b5230b2aef6c9f232d86b187de0b416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55fc0f6cabc8d9606e823e48f5ea2c46b8b46cc7b08a7c731fec72e01b26807e = $this->env->getExtension("native_profiler");
        $__internal_55fc0f6cabc8d9606e823e48f5ea2c46b8b46cc7b08a7c731fec72e01b26807e->enter($__internal_55fc0f6cabc8d9606e823e48f5ea2c46b8b46cc7b08a7c731fec72e01b26807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fc0f6cabc8d9606e823e48f5ea2c46b8b46cc7b08a7c731fec72e01b26807e->leave($__internal_55fc0f6cabc8d9606e823e48f5ea2c46b8b46cc7b08a7c731fec72e01b26807e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_736c5087b9611b6b1c80d67fa5d8e7c6776e6656ac2dea5f02803a1d6671aba8 = $this->env->getExtension("native_profiler");
        $__internal_736c5087b9611b6b1c80d67fa5d8e7c6776e6656ac2dea5f02803a1d6671aba8->enter($__internal_736c5087b9611b6b1c80d67fa5d8e7c6776e6656ac2dea5f02803a1d6671aba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_736c5087b9611b6b1c80d67fa5d8e7c6776e6656ac2dea5f02803a1d6671aba8->leave($__internal_736c5087b9611b6b1c80d67fa5d8e7c6776e6656ac2dea5f02803a1d6671aba8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_755ee9b7895711131303a502907c6344f150a198b4f4914fd62a7b7e1215466e = $this->env->getExtension("native_profiler");
        $__internal_755ee9b7895711131303a502907c6344f150a198b4f4914fd62a7b7e1215466e->enter($__internal_755ee9b7895711131303a502907c6344f150a198b4f4914fd62a7b7e1215466e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_755ee9b7895711131303a502907c6344f150a198b4f4914fd62a7b7e1215466e->leave($__internal_755ee9b7895711131303a502907c6344f150a198b4f4914fd62a7b7e1215466e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_032615c555d46148cfa7263300302fbcfd477ab615675383224fedf182533d68 = $this->env->getExtension("native_profiler");
        $__internal_032615c555d46148cfa7263300302fbcfd477ab615675383224fedf182533d68->enter($__internal_032615c555d46148cfa7263300302fbcfd477ab615675383224fedf182533d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_032615c555d46148cfa7263300302fbcfd477ab615675383224fedf182533d68->leave($__internal_032615c555d46148cfa7263300302fbcfd477ab615675383224fedf182533d68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
