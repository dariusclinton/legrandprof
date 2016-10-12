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
        $__internal_d39f2e37eb8a6bd98238a01772caf2548cfd6e53b63240a3c46e7b04be6aeccb = $this->env->getExtension("native_profiler");
        $__internal_d39f2e37eb8a6bd98238a01772caf2548cfd6e53b63240a3c46e7b04be6aeccb->enter($__internal_d39f2e37eb8a6bd98238a01772caf2548cfd6e53b63240a3c46e7b04be6aeccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:receive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39f2e37eb8a6bd98238a01772caf2548cfd6e53b63240a3c46e7b04be6aeccb->leave($__internal_d39f2e37eb8a6bd98238a01772caf2548cfd6e53b63240a3c46e7b04be6aeccb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad0a023ade78a78acefa24f1c2a655551cf14276577d24ba54d1525916a51f35 = $this->env->getExtension("native_profiler");
        $__internal_ad0a023ade78a78acefa24f1c2a655551cf14276577d24ba54d1525916a51f35->enter($__internal_ad0a023ade78a78acefa24f1c2a655551cf14276577d24ba54d1525916a51f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages reçus - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ad0a023ade78a78acefa24f1c2a655551cf14276577d24ba54d1525916a51f35->leave($__internal_ad0a023ade78a78acefa24f1c2a655551cf14276577d24ba54d1525916a51f35_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_38a2058de872c3bb4eae0a96647af5ff920d8e04456da9415420c8abfea2d579 = $this->env->getExtension("native_profiler");
        $__internal_38a2058de872c3bb4eae0a96647af5ff920d8e04456da9415420c8abfea2d579->enter($__internal_38a2058de872c3bb4eae0a96647af5ff920d8e04456da9415420c8abfea2d579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_38a2058de872c3bb4eae0a96647af5ff920d8e04456da9415420c8abfea2d579->leave($__internal_38a2058de872c3bb4eae0a96647af5ff920d8e04456da9415420c8abfea2d579_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26a2655d804d09d7a21562f6a91c677f8c80c42c389e4099fbaa4dabafc979b7 = $this->env->getExtension("native_profiler");
        $__internal_26a2655d804d09d7a21562f6a91c677f8c80c42c389e4099fbaa4dabafc979b7->enter($__internal_26a2655d804d09d7a21562f6a91c677f8c80c42c389e4099fbaa4dabafc979b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26a2655d804d09d7a21562f6a91c677f8c80c42c389e4099fbaa4dabafc979b7->leave($__internal_26a2655d804d09d7a21562f6a91c677f8c80c42c389e4099fbaa4dabafc979b7_prof);

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
