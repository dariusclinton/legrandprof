<?php

/* LGPAdminBundle::standard_layout.html.twig */
class __TwigTemplate_7d71288125147ffee3130c35fa89ac74d48cf5448767e1eedce460b7bb2ec01b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "LGPAdminBundle::standard_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461f3ef886dba3caffc64cbd9d8ec7357e4da7496e3264ff6b4c0cec1f2f0826 = $this->env->getExtension("native_profiler");
        $__internal_461f3ef886dba3caffc64cbd9d8ec7357e4da7496e3264ff6b4c0cec1f2f0826->enter($__internal_461f3ef886dba3caffc64cbd9d8ec7357e4da7496e3264ff6b4c0cec1f2f0826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461f3ef886dba3caffc64cbd9d8ec7357e4da7496e3264ff6b4c0cec1f2f0826->leave($__internal_461f3ef886dba3caffc64cbd9d8ec7357e4da7496e3264ff6b4c0cec1f2f0826_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c95b98893c5210984b8ae215e64ad21b92bb442cdb079c6c1f3a8ce30e3bc1c = $this->env->getExtension("native_profiler");
        $__internal_1c95b98893c5210984b8ae215e64ad21b92bb442cdb079c6c1f3a8ce30e3bc1c->enter($__internal_1c95b98893c5210984b8ae215e64ad21b92bb442cdb079c6c1f3a8ce30e3bc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

  ";
        // line 7
        echo "  <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ico.png"), "html", null, true);
        echo "\"/>
";
        
        $__internal_1c95b98893c5210984b8ae215e64ad21b92bb442cdb079c6c1f3a8ce30e3bc1c->leave($__internal_1c95b98893c5210984b8ae215e64ad21b92bb442cdb079c6c1f3a8ce30e3bc1c_prof);

    }

    // line 10
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_84ebe2470fd23694e8e03a789f0c6a90b9938c5ceaf66f533eda460217c7504f = $this->env->getExtension("native_profiler");
        $__internal_84ebe2470fd23694e8e03a789f0c6a90b9938c5ceaf66f533eda460217c7504f->enter($__internal_84ebe2470fd23694e8e03a789f0c6a90b9938c5ceaf66f533eda460217c7504f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 11
        echo "  ";
        $this->displayParentBlock("sonata_top_nav_menu", $context, $blocks);
        echo "
  <div id=\"stats-user\"></div>

  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  <script type=\"text/javascript\">
    \$(function () {
      var url = Routing.generate('lgp_user_homepage');
//      alert(url);

      \$.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
          \$('#stats-user').html(data);
        },
        error: function () {
          console.log(\" La requête n'a pas abouti !\");
        }
      });
    });
  </script>
";
        
        $__internal_84ebe2470fd23694e8e03a789f0c6a90b9938c5ceaf66f533eda460217c7504f->leave($__internal_84ebe2470fd23694e8e03a789f0c6a90b9938c5ceaf66f533eda460217c7504f_prof);

    }

    public function getTemplateName()
    {
        return "LGPAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  70 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block stylesheets %}
  {{ parent() }}

  {# Icon #}
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('ico.png') }}\"/>
{% endblock stylesheets %}

{% block sonata_top_nav_menu %}
  {{ parent() }}
  <div id=\"stats-user\"></div>

  <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
  <script src=\"{{ path('fos_js_routing_js', { 'callback': 'fos.Router.setData' }) }}\"></script>
  <script type=\"text/javascript\">
    \$(function () {
      var url = Routing.generate('lgp_user_homepage');
//      alert(url);

      \$.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
          \$('#stats-user').html(data);
        },
        error: function () {
          console.log(\" La requête n'a pas abouti !\");
        }
      });
    });
  </script>
{% endblock %}
";
    }
}
