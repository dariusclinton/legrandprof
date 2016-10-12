<?php

/* LGPUserBundle:Message:receive.html.twig */
class __TwigTemplate_ed6b1acbb4799fcd16d2d8bc5df32a04a96cb5ea79323f3331152e6ffb8bea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:receive.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33acfc27062b9f7762a3bf8342412d155e60317f3017744a47e9bb791740abd6 = $this->env->getExtension("native_profiler");
        $__internal_33acfc27062b9f7762a3bf8342412d155e60317f3017744a47e9bb791740abd6->enter($__internal_33acfc27062b9f7762a3bf8342412d155e60317f3017744a47e9bb791740abd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:receive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33acfc27062b9f7762a3bf8342412d155e60317f3017744a47e9bb791740abd6->leave($__internal_33acfc27062b9f7762a3bf8342412d155e60317f3017744a47e9bb791740abd6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6625b8d57140e1f70857ffd3186c688a56a7d372f2115de20fc7bb2f922213 = $this->env->getExtension("native_profiler");
        $__internal_bd6625b8d57140e1f70857ffd3186c688a56a7d372f2115de20fc7bb2f922213->enter($__internal_bd6625b8d57140e1f70857ffd3186c688a56a7d372f2115de20fc7bb2f922213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages reçus - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd6625b8d57140e1f70857ffd3186c688a56a7d372f2115de20fc7bb2f922213->leave($__internal_bd6625b8d57140e1f70857ffd3186c688a56a7d372f2115de20fc7bb2f922213_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_afff6ca2a02445c48ec78526c42ce972a3b79c56ce2d1622c53b6ed7ca7b6e68 = $this->env->getExtension("native_profiler");
        $__internal_afff6ca2a02445c48ec78526c42ce972a3b79c56ce2d1622c53b6ed7ca7b6e68->enter($__internal_afff6ca2a02445c48ec78526c42ce972a3b79c56ce2d1622c53b6ed7ca7b6e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_afff6ca2a02445c48ec78526c42ce972a3b79c56ce2d1622c53b6ed7ca7b6e68->leave($__internal_afff6ca2a02445c48ec78526c42ce972a3b79c56ce2d1622c53b6ed7ca7b6e68_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a08bd59fc24e469f4ac8a3200af6699be6734afd1e2fb33454c122daf4efdcb8 = $this->env->getExtension("native_profiler");
        $__internal_a08bd59fc24e469f4ac8a3200af6699be6734afd1e2fb33454c122daf4efdcb8->enter($__internal_a08bd59fc24e469f4ac8a3200af6699be6734afd1e2fb33454c122daf4efdcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <h1>Les messages reçus</h1>
  
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">
    Reçus<span class=\"badge\">";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LGPUserBundle:Message:receive", array("is_read" => "false")));
        echo "</span>
  </a>
  <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 21
            echo "    <h5 class=\"text-muted\">Aucun message reçu !</h5>
  ";
        } else {
            // line 23
            echo "    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>De</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "          <tr>
            <td>
              <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "nom", array()), "html", null, true);
                echo " </a>
            </td>
            <td>
              <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
              <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo " </a>
            </td>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </tbody>
    </table>
      
    <div class=\"messages-details\"></div>
  ";
        }
        // line 58
        echo "  
";
        
        $__internal_a08bd59fc24e469f4ac8a3200af6699be6734afd1e2fb33454c122daf4efdcb8->leave($__internal_a08bd59fc24e469f4ac8a3200af6699be6734afd1e2fb33454c122daf4efdcb8_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:receive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 58,  165 => 53,  153 => 47,  148 => 45,  141 => 43,  133 => 40,  123 => 37,  119 => 35,  115 => 34,  102 => 23,  98 => 21,  96 => 20,  91 => 18,  86 => 16,  82 => 15,  78 => 14,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Messages reçus - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
  <h1>Les messages reçus</h1>
  
  <a href=\"{{ path('lgp_user_message_new') }}\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"{{ path('lgp_user_message_receive') }}\" class=\"btn btn-primary\">
    Reçus<span class=\"badge\">{{ render (controller('LGPUserBundle:Message:receive', {'is_read': 'false'})) }}</span>
  </a>
  <a href=\"{{ path('lgp_user_message_send') }}\" class=\"btn btn-primary\">Envoyés</a>
  
  {% if messages|length <= 0 %}
    <h5 class=\"text-muted\">Aucun message reçu !</h5>
  {% else %}
    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>De</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        {% for message in messages %}
          <tr>
            <td>
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\">{{ message.expediteur.prenoms }} {{ message.expediteur.nom }} </a>
            </td>
            <td>
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\">{{ message.objet }}</a>
            </td>
            <td>
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\"> {{ message.contenu }} </a>
            </td>
            <td>{{ message.dateEnvoi|date('d/m/Y') }}</td>
            <td>
              <a href='{{ path('lgp_user_message_delete',  {'id': message.id }) }}' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
      
    <div class=\"messages-details\"></div>
  {% endif %}
  
{% endblock %}";
    }
}
