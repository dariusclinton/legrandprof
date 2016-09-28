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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_512f303de786fde197eb4aedc2ce5197cf659c0744cafab50efe0fd4df32ae77 = $this->env->getExtension("native_profiler");
        $__internal_512f303de786fde197eb4aedc2ce5197cf659c0744cafab50efe0fd4df32ae77->enter($__internal_512f303de786fde197eb4aedc2ce5197cf659c0744cafab50efe0fd4df32ae77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:receive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512f303de786fde197eb4aedc2ce5197cf659c0744cafab50efe0fd4df32ae77->leave($__internal_512f303de786fde197eb4aedc2ce5197cf659c0744cafab50efe0fd4df32ae77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c56a7371ceb539ce2abeea38961e9bc09353753d019b8ef261c4b5ccf09735 = $this->env->getExtension("native_profiler");
        $__internal_46c56a7371ceb539ce2abeea38961e9bc09353753d019b8ef261c4b5ccf09735->enter($__internal_46c56a7371ceb539ce2abeea38961e9bc09353753d019b8ef261c4b5ccf09735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages reçus - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_46c56a7371ceb539ce2abeea38961e9bc09353753d019b8ef261c4b5ccf09735->leave($__internal_46c56a7371ceb539ce2abeea38961e9bc09353753d019b8ef261c4b5ccf09735_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_337167fa619e383fcfe05a036ca98452a80e0e1f17235a54441c224198289578 = $this->env->getExtension("native_profiler");
        $__internal_337167fa619e383fcfe05a036ca98452a80e0e1f17235a54441c224198289578->enter($__internal_337167fa619e383fcfe05a036ca98452a80e0e1f17235a54441c224198289578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les messages reçus</h1>
  
  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">
    Reçus<span class=\"badge\">";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LGPUserBundle:Message:receive", array("is_read" => "false")));
        echo "</span>
  </a>
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 17
            echo "    <h1 class=\"text-muted\">Aucun message reçu !</h1>
  ";
        } else {
            // line 19
            echo "    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>Expéditeur</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "          <tr>
            <td>
              <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "nom", array()), "html", null, true);
                echo " </a>
            </td>
            <td>
              <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
              <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo " </a>
            </td>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 43
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
            // line 49
            echo "      </tbody>
    </table>
      
    <div class=\"messages-details\"></div>
  ";
        }
        // line 54
        echo "  
";
        
        $__internal_337167fa619e383fcfe05a036ca98452a80e0e1f17235a54441c224198289578->leave($__internal_337167fa619e383fcfe05a036ca98452a80e0e1f17235a54441c224198289578_prof);

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
        return array (  155 => 54,  148 => 49,  136 => 43,  131 => 41,  124 => 39,  116 => 36,  106 => 33,  102 => 31,  98 => 30,  85 => 19,  81 => 17,  79 => 16,  74 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Messages reçus - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Les messages reçus</h1>
  
  <a href=\"{{ path('lgp_user_message_new') }}\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"{{ path('lgp_user_message_receive') }}\" class=\"btn btn-primary\">
    Reçus<span class=\"badge\">{{ render (controller('LGPUserBundle:Message:receive', {'is_read': 'false'})) }}</span>
  </a>
  <a href=\"{{ path('lgp_user_message_send') }}\" class=\"btn btn-primary\">Envoyés</a>
  
  {% if messages|length <= 0 %}
    <h1 class=\"text-muted\">Aucun message reçu !</h1>
  {% else %}
    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>Expéditeur</th>
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
