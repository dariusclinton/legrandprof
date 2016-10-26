<?php

/* LGPAdminBundle::standard_layout.html.twig */
class __TwigTemplate_8bcfa0ac035b96d83ffd2c1defb06baca457d349b25e1555025df1f9b083763e extends Twig_Template
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
        $__internal_03508b95cae5a4d0ed30bccd3ef655298dcbc1300c498a4c7c58ec87e5b608ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03508b95cae5a4d0ed30bccd3ef655298dcbc1300c498a4c7c58ec87e5b608ef->enter($__internal_03508b95cae5a4d0ed30bccd3ef655298dcbc1300c498a4c7c58ec87e5b608ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03508b95cae5a4d0ed30bccd3ef655298dcbc1300c498a4c7c58ec87e5b608ef->leave($__internal_03508b95cae5a4d0ed30bccd3ef655298dcbc1300c498a4c7c58ec87e5b608ef_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c67bf227c048c4fca6fbd65a682370f4d5b9c2145f49c807881cdfecd0f2fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c67bf227c048c4fca6fbd65a682370f4d5b9c2145f49c807881cdfecd0f2fed->enter($__internal_6c67bf227c048c4fca6fbd65a682370f4d5b9c2145f49c807881cdfecd0f2fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

  ";
        // line 7
        echo "  <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ico.png"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6c67bf227c048c4fca6fbd65a682370f4d5b9c2145f49c807881cdfecd0f2fed->leave($__internal_6c67bf227c048c4fca6fbd65a682370f4d5b9c2145f49c807881cdfecd0f2fed_prof);

    }

    // line 10
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_7945613bd031cf0b16d62048db2bb6b4ad8dc64b9f903f7db17d4dcda03c0aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7945613bd031cf0b16d62048db2bb6b4ad8dc64b9f903f7db17d4dcda03c0aaf->enter($__internal_7945613bd031cf0b16d62048db2bb6b4ad8dc64b9f903f7db17d4dcda03c0aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 11
        echo "  ";
        $this->displayParentBlock("sonata_top_nav_menu", $context, $blocks);
        echo "
  <div id=\"stats-user\"></div>

  <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
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
        
        $__internal_7945613bd031cf0b16d62048db2bb6b4ad8dc64b9f903f7db17d4dcda03c0aaf->leave($__internal_7945613bd031cf0b16d62048db2bb6b4ad8dc64b9f903f7db17d4dcda03c0aaf_prof);

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
