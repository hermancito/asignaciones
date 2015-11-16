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
        $__internal_72142065b419f1655eae47ade11e6f22d78dd46de33048a51404c1467b888651 = $this->env->getExtension("native_profiler");
        $__internal_72142065b419f1655eae47ade11e6f22d78dd46de33048a51404c1467b888651->enter($__internal_72142065b419f1655eae47ade11e6f22d78dd46de33048a51404c1467b888651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hermanUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72142065b419f1655eae47ade11e6f22d78dd46de33048a51404c1467b888651->leave($__internal_72142065b419f1655eae47ade11e6f22d78dd46de33048a51404c1467b888651_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb1732b612f0bf12e9182e970cb2ac91a790f72a01cd1fe75ab4b21bbac6937c = $this->env->getExtension("native_profiler");
        $__internal_fb1732b612f0bf12e9182e970cb2ac91a790f72a01cd1fe75ab4b21bbac6937c->enter($__internal_fb1732b612f0bf12e9182e970cb2ac91a790f72a01cd1fe75ab4b21bbac6937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!--llamamos tambien al contenido del bloque body de nuestro layout -->
";
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container theme-showcase\" role=\"main\">

    <div class=\"col-md-12\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Usuarios</h3>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-striped\">
                <thead>
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
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 34
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 35
                echo "                                <strong>Administrador</strong>
                            ";
            } else {
                // line 37
                echo "                                <strong>Usuario</strong>
                            ";
            }
            // line 39
            echo "                        </td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"\" class=\"btn btn-sm btn-info\">Ver</a>
                            <a href=\"\" class=\"btn btn-sm btn-warning\">Editar</a>
                            <a href=\"\" class=\"btn btn-sm btn-danger\">Borrar</a>
                        </td>
                    </tr>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_fb1732b612f0bf12e9182e970cb2ac91a790f72a01cd1fe75ab4b21bbac6937c->leave($__internal_fb1732b612f0bf12e9182e970cb2ac91a790f72a01cd1fe75ab4b21bbac6937c_prof);

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
        return array (  124 => 49,  110 => 41,  106 => 40,  103 => 39,  99 => 37,  95 => 35,  93 => 34,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  73 => 28,  69 => 27,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* <!--llamamos tambien al contenido del bloque body de nuestro layout -->*/
/* {{parent() }}*/
/* <div class="container theme-showcase" role="main">*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="panel panel-success">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">Usuarios</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Username</th>*/
/*                         <th>Nombre</th>*/
/*                         <th>Apellidos</th>*/
/*                         <th>Email</th>*/
/*                         <th>Role</th>*/
/*                         <th>Created</th>*/
/*                         <th>Updated</th>*/
/*                         <th>Acciones</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr>*/
/*                         <td>{{ user.username }}</td>*/
/*                         <td>{{ user.firstName }}</td>*/
/*                         <td>{{ user.lastName }}</td>*/
/*                         <td>{{ user.email }}</td>*/
/*                         <td>*/
/*                             {% if user.role == 'ROLE_ADMIN' %}*/
/*                                 <strong>Administrador</strong>*/
/*                             {% else %}*/
/*                                 <strong>Usuario</strong>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>{{ user.createdAt|date('d-m-Y H:i') }}</td>*/
/*                         <td>{{ user.updatedAt|date('d-m-Y H:i')}}</td>*/
/*                         <td>*/
/*                             <a href="" class="btn btn-sm btn-info">Ver</a>*/
/*                             <a href="" class="btn btn-sm btn-warning">Editar</a>*/
/*                             <a href="" class="btn btn-sm btn-danger">Borrar</a>*/
/*                         </td>*/
/*                     </tr>  */
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
