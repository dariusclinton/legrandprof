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
        $__internal_13bbbc2676aac49891e35a4e3b5e3044884c29cbbe0bc880bb8a9b05b1230c57 = $this->env->getExtension("native_profiler");
        $__internal_13bbbc2676aac49891e35a4e3b5e3044884c29cbbe0bc880bb8a9b05b1230c57->enter($__internal_13bbbc2676aac49891e35a4e3b5e3044884c29cbbe0bc880bb8a9b05b1230c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13bbbc2676aac49891e35a4e3b5e3044884c29cbbe0bc880bb8a9b05b1230c57->leave($__internal_13bbbc2676aac49891e35a4e3b5e3044884c29cbbe0bc880bb8a9b05b1230c57_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_855a448d4d01cc8e789aef07d277e9fcbf0a5c7a8af98d8773ef2a0ee5eeeb95 = $this->env->getExtension("native_profiler");
        $__internal_855a448d4d01cc8e789aef07d277e9fcbf0a5c7a8af98d8773ef2a0ee5eeeb95->enter($__internal_855a448d4d01cc8e789aef07d277e9fcbf0a5c7a8af98d8773ef2a0ee5eeeb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_855a448d4d01cc8e789aef07d277e9fcbf0a5c7a8af98d8773ef2a0ee5eeeb95->leave($__internal_855a448d4d01cc8e789aef07d277e9fcbf0a5c7a8af98d8773ef2a0ee5eeeb95_prof);

    }

    // line 10
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_34a1310bcf7d5eae9fe82e5fd72db3a0576ab1b8afc682d29e514361e0aa6256 = $this->env->getExtension("native_profiler");
        $__internal_34a1310bcf7d5eae9fe82e5fd72db3a0576ab1b8afc682d29e514361e0aa6256->enter($__internal_34a1310bcf7d5eae9fe82e5fd72db3a0576ab1b8afc682d29e514361e0aa6256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_34a1310bcf7d5eae9fe82e5fd72db3a0576ab1b8afc682d29e514361e0aa6256->leave($__internal_34a1310bcf7d5eae9fe82e5fd72db3a0576ab1b8afc682d29e514361e0aa6256_prof);

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
