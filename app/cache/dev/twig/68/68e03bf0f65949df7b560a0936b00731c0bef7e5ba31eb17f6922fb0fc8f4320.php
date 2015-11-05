<?php

/* hermanUserBundle:User:index.html.twig */
class __TwigTemplate_d76d935a450335a3a1f4c2ffeab23f6c4f4b25b3957aabbad05c229c49e91742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "hermanUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aabeaa2e55df2b42f58ea7652530e6e6d9b6b5f0cc1ff0652cfa127d0fe776fa = $this->env->getExtension("native_profiler");
        $__internal_aabeaa2e55df2b42f58ea7652530e6e6d9b6b5f0cc1ff0652cfa127d0fe776fa->enter($__internal_aabeaa2e55df2b42f58ea7652530e6e6d9b6b5f0cc1ff0652cfa127d0fe776fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hermanUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aabeaa2e55df2b42f58ea7652530e6e6d9b6b5f0cc1ff0652cfa127d0fe776fa->leave($__internal_aabeaa2e55df2b42f58ea7652530e6e6d9b6b5f0cc1ff0652cfa127d0fe776fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_07ca8b1f0a1783d1aff511238f1beb94e2bbd89251e58dcc22c37bb36ddb02d9 = $this->env->getExtension("native_profiler");
        $__internal_07ca8b1f0a1783d1aff511238f1beb94e2bbd89251e58dcc22c37bb36ddb02d9->enter($__internal_07ca8b1f0a1783d1aff511238f1beb94e2bbd89251e58dcc22c37bb36ddb02d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2>Users</h2>

<table border=1>
    <tr>
        <th>Username</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Acciones</th>
    </tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 23
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 24
                echo "                    <strong>Administrador</strong>
                ";
            } else {
                // line 26
                echo "                    <strong>Usuario</strong>
                ";
            }
            // line 28
            echo "            </td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"\">Ver</a>
                <a href=\"\">Editar</a>
                <a href=\"\">Borrar</a>
            </td>
        </tr>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</table>

";
        
        $__internal_07ca8b1f0a1783d1aff511238f1beb94e2bbd89251e58dcc22c37bb36ddb02d9->leave($__internal_07ca8b1f0a1783d1aff511238f1beb94e2bbd89251e58dcc22c37bb36ddb02d9_prof);

    }

    public function getTemplateName()
    {
        return "hermanUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  96 => 30,  92 => 29,  89 => 28,  85 => 26,  81 => 24,  79 => 23,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  59 => 17,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* <h2>Users</h2>*/
/* */
/* <table border=1>*/
/*     <tr>*/
/*         <th>Username</th>*/
/*         <th>Nombre</th>*/
/*         <th>Apellidos</th>*/
/*         <th>Email</th>*/
/*         <th>Role</th>*/
/*         <th>Created</th>*/
/*         <th>Updated</th>*/
/*         <th>Acciones</th>*/
/*     </tr>*/
/*     {% for user in users %}*/
/*         <tr>*/
/*             <td>{{ user.username }}</td>*/
/*             <td>{{ user.firstName }}</td>*/
/*             <td>{{ user.lastName }}</td>*/
/*             <td>{{ user.email }}</td>*/
/*             <td>*/
/*                 {% if user.role == 'ROLE_ADMIN' %}*/
/*                     <strong>Administrador</strong>*/
/*                 {% else %}*/
/*                     <strong>Usuario</strong>*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td>{{ user.createdAt|date('d-m-Y H:i') }}</td>*/
/*             <td>{{ user.updatedAt|date('d-m-Y H:i')}}</td>*/
/*             <td>*/
/*                 <a href="">Ver</a>*/
/*                 <a href="">Editar</a>*/
/*                 <a href="">Borrar</a>*/
/*             </td>*/
/*         </tr>  */
/*     {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
