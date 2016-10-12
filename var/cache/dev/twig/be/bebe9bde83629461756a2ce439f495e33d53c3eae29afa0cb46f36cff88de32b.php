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
        $__internal_a8304ce8388a67d00c276dd88c6036378d82e2976decdb0c3aa3701f98ed0b9a = $this->env->getExtension("native_profiler");
        $__internal_a8304ce8388a67d00c276dd88c6036378d82e2976decdb0c3aa3701f98ed0b9a->enter($__internal_a8304ce8388a67d00c276dd88c6036378d82e2976decdb0c3aa3701f98ed0b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:receive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8304ce8388a67d00c276dd88c6036378d82e2976decdb0c3aa3701f98ed0b9a->leave($__internal_a8304ce8388a67d00c276dd88c6036378d82e2976decdb0c3aa3701f98ed0b9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d3387526aa31eb5a8e12e1fc4cfe1ef7d2b26aca0682d62de728caf6d9641e2 = $this->env->getExtension("native_profiler");
        $__internal_2d3387526aa31eb5a8e12e1fc4cfe1ef7d2b26aca0682d62de728caf6d9641e2->enter($__internal_2d3387526aa31eb5a8e12e1fc4cfe1ef7d2b26aca0682d62de728caf6d9641e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages reçus - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d3387526aa31eb5a8e12e1fc4cfe1ef7d2b26aca0682d62de728caf6d9641e2->leave($__internal_2d3387526aa31eb5a8e12e1fc4cfe1ef7d2b26aca0682d62de728caf6d9641e2_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ffb5f85f4498f6acc8fbbaeded0cb4587d82b1bae7c8f4afd6ee878ef7198f2c = $this->env->getExtension("native_profiler");
        $__internal_ffb5f85f4498f6acc8fbbaeded0cb4587d82b1bae7c8f4afd6ee878ef7198f2c->enter($__internal_ffb5f85f4498f6acc8fbbaeded0cb4587d82b1bae7c8f4afd6ee878ef7198f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ffb5f85f4498f6acc8fbbaeded0cb4587d82b1bae7c8f4afd6ee878ef7198f2c->leave($__internal_ffb5f85f4498f6acc8fbbaeded0cb4587d82b1bae7c8f4afd6ee878ef7198f2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_64047c1838a8840c0d274e4eae6c158630e0f1f1d396a62f1459a47f8070bab0 = $this->env->getExtension("native_profiler");
        $__internal_64047c1838a8840c0d274e4eae6c158630e0f1f1d396a62f1459a47f8070bab0->enter($__internal_64047c1838a8840c0d274e4eae6c158630e0f1f1d396a62f1459a47f8070bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    
    <div class=\"dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 17
            echo "                    <h5 class=\"text-muted\">Aucun message reçu !</h5>
                ";
        } else {
            // line 19
            echo "                <div class=\"row\">
                    <div class=\"col-md-4 no-padding\">
                        <div class=\"actions\">
                            <ul>
                                <li><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
            echo "\">Nouveau</a></li>
                                <li><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
            echo "\">Recus</a></li>
                                <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
            echo "\">Envoyes</a></li>
                            </ul>
                        </div>
                        <div class=\"messages-users\">
                            <ul class=\"review-list\">
                                
                                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "                                <li class=\"clearfix\">
                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\" style=\"display: block\" class=\"message_read\">
                                        <div class=\"image img-circle\">
                                            ";
                // line 35
                if ((null === $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "image", array()))) {
                    // line 36
                    echo "                                                <img class=\"img-circle\"
                                                     src=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\"
                                                     alt=\"Tour Package\"/>
                                            ";
                } else {
                    // line 40
                    echo "                                            <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\"Man\" />
                                            ";
                }
                // line 42
                echo "                                        </div>
                                        <div class=\"content\">
                                            <div class=\"row gap-20 mb-0 over-y\">
                                                <p><b>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "nom", array()), "html", null, true);
                echo "  </b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo "</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>\t
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"message messages-details\">
                            
                        </div>
                    </div>
                </div>

                   
                ";
        }
        // line 62
        echo "                                         
            </div>
        </div>
    </div>
  <h1>Les messages reçus</h1>
  
  <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">
    Reçus<span class=\"badge\">";
        // line 70
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LGPUserBundle:Message:receive", array("is_read" => "false")));
        echo "</span>
  </a>
  <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 74
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 75
            echo "    <h5 class=\"text-muted\">Aucun message reçu !</h5>
  ";
        } else {
            // line 77
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
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                echo "          <tr>
            <td>
              <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "nom", array()), "html", null, true);
                echo " </a>
            </td>
            <td>
              <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
              <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo " </a>
            </td>
            <td>";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 101
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
            // line 107
            echo "      </tbody>
    </table>
      
  ";
        }
        // line 111
        echo "  
";
        
        $__internal_64047c1838a8840c0d274e4eae6c158630e0f1f1d396a62f1459a47f8070bab0->leave($__internal_64047c1838a8840c0d274e4eae6c158630e0f1f1d396a62f1459a47f8070bab0_prof);

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
        return array (  274 => 111,  268 => 107,  256 => 101,  251 => 99,  244 => 97,  236 => 94,  226 => 91,  222 => 89,  218 => 88,  205 => 77,  201 => 75,  199 => 74,  194 => 72,  189 => 70,  185 => 69,  181 => 68,  173 => 62,  159 => 51,  143 => 45,  138 => 42,  132 => 40,  126 => 37,  123 => 36,  121 => 35,  116 => 33,  113 => 32,  109 => 31,  100 => 25,  96 => 24,  92 => 23,  86 => 19,  82 => 17,  80 => 16,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    
    <div class=\"dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                {% if messages|length <= 0 %}
                    <h5 class=\"text-muted\">Aucun message reçu !</h5>
                {% else %}
                <div class=\"row\">
                    <div class=\"col-md-4 no-padding\">
                        <div class=\"actions\">
                            <ul>
                                <li><a href=\"{{ path('lgp_user_message_new') }}\">Nouveau</a></li>
                                <li><a href=\"{{ path('lgp_user_message_receive') }}\">Recus</a></li>
                                <li><a href=\"{{ path('lgp_user_message_send') }}\">Envoyes</a></li>
                            </ul>
                        </div>
                        <div class=\"messages-users\">
                            <ul class=\"review-list\">
                                
                                {% for message in messages %}
                                <li class=\"clearfix\">
                                    <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\" style=\"display: block\" class=\"message_read\">
                                        <div class=\"image img-circle\">
                                            {% if message.expediteur.image is null %}
                                                <img class=\"img-circle\"
                                                     src=\"{{ asset('uploads/profils/default.jpg') }}\"
                                                     alt=\"Tour Package\"/>
                                            {% else %}
                                            <img class=\"img-circle\" src=\"{{ asset(message.expediteur.image.webPath) }}\" alt=\"Man\" />
                                            {% endif %}
                                        </div>
                                        <div class=\"content\">
                                            <div class=\"row gap-20 mb-0 over-y\">
                                                <p><b>{{ message.expediteur.prenoms }} {{ message.expediteur.nom }}  </b>: {{ message.contenu }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>\t
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"message messages-details\">
                            
                        </div>
                    </div>
                </div>

                   
                {% endif %}                                         
            </div>
        </div>
    </div>
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
      
  {% endif %}
  
{% endblock %}";
    }
}
