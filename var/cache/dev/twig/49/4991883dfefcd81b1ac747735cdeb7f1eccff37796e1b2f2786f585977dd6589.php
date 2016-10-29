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
        $__internal_86c1e3a82f945c875242dfa57a394d4a1d01bc92fb4aa6135deda4c6ea93bc07 = $this->env->getExtension("native_profiler");
        $__internal_86c1e3a82f945c875242dfa57a394d4a1d01bc92fb4aa6135deda4c6ea93bc07->enter($__internal_86c1e3a82f945c875242dfa57a394d4a1d01bc92fb4aa6135deda4c6ea93bc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPAdminBundle::standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86c1e3a82f945c875242dfa57a394d4a1d01bc92fb4aa6135deda4c6ea93bc07->leave($__internal_86c1e3a82f945c875242dfa57a394d4a1d01bc92fb4aa6135deda4c6ea93bc07_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b78021d99230d235eb694e9da06434a36212684ab32992ffee2a5e8fb1eada6 = $this->env->getExtension("native_profiler");
        $__internal_5b78021d99230d235eb694e9da06434a36212684ab32992ffee2a5e8fb1eada6->enter($__internal_5b78021d99230d235eb694e9da06434a36212684ab32992ffee2a5e8fb1eada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b78021d99230d235eb694e9da06434a36212684ab32992ffee2a5e8fb1eada6->leave($__internal_5b78021d99230d235eb694e9da06434a36212684ab32992ffee2a5e8fb1eada6_prof);

    }

    // line 10
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_2351af081ef00394dad41b327d843ff2bff42313aebc9fc370e6aa384041f77d = $this->env->getExtension("native_profiler");
        $__internal_2351af081ef00394dad41b327d843ff2bff42313aebc9fc370e6aa384041f77d->enter($__internal_2351af081ef00394dad41b327d843ff2bff42313aebc9fc370e6aa384041f77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_2351af081ef00394dad41b327d843ff2bff42313aebc9fc370e6aa384041f77d->leave($__internal_2351af081ef00394dad41b327d843ff2bff42313aebc9fc370e6aa384041f77d_prof);

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
