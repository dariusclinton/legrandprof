<?php

/* LGPUserBundle:Message:send.html.twig */
class __TwigTemplate_02833d7870cdd13eca16015553b05748ec4ddf2c3226415da529344d31c685ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:send.html.twig", 1);
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
        $__internal_f284c60a42e95a9bc8e49d0cb029b9f459d91fc271f7621961c605758942a565 = $this->env->getExtension("native_profiler");
        $__internal_f284c60a42e95a9bc8e49d0cb029b9f459d91fc271f7621961c605758942a565->enter($__internal_f284c60a42e95a9bc8e49d0cb029b9f459d91fc271f7621961c605758942a565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:send.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f284c60a42e95a9bc8e49d0cb029b9f459d91fc271f7621961c605758942a565->leave($__internal_f284c60a42e95a9bc8e49d0cb029b9f459d91fc271f7621961c605758942a565_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dbb5e89a83a67238ea966561aa13be3c1373cddf33e2dfe98a4895ff005b688 = $this->env->getExtension("native_profiler");
        $__internal_2dbb5e89a83a67238ea966561aa13be3c1373cddf33e2dfe98a4895ff005b688->enter($__internal_2dbb5e89a83a67238ea966561aa13be3c1373cddf33e2dfe98a4895ff005b688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages envoyés - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2dbb5e89a83a67238ea966561aa13be3c1373cddf33e2dfe98a4895ff005b688->leave($__internal_2dbb5e89a83a67238ea966561aa13be3c1373cddf33e2dfe98a4895ff005b688_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5d6b11eb199aec20d16f64f9df036e8b4c89ce50529c3a306ae1606812b7233b = $this->env->getExtension("native_profiler");
        $__internal_5d6b11eb199aec20d16f64f9df036e8b4c89ce50529c3a306ae1606812b7233b->enter($__internal_5d6b11eb199aec20d16f64f9df036e8b4c89ce50529c3a306ae1606812b7233b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5d6b11eb199aec20d16f64f9df036e8b4c89ce50529c3a306ae1606812b7233b->leave($__internal_5d6b11eb199aec20d16f64f9df036e8b4c89ce50529c3a306ae1606812b7233b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ce2a6bb584f03eebaf90212ebe0270c185863e1a64347b91dfc91bbbcdd1582 = $this->env->getExtension("native_profiler");
        $__internal_3ce2a6bb584f03eebaf90212ebe0270c185863e1a64347b91dfc91bbbcdd1582->enter($__internal_3ce2a6bb584f03eebaf90212ebe0270c185863e1a64347b91dfc91bbbcdd1582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                if ((null === $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "image", array()))) {
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\"Man\" />
                                            ";
                }
                // line 42
                echo "                                        </div>
                                        <div class=\"content\">
                                            <div class=\"row gap-20 mb-0 over-y\">
                                                <p><b>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "nom", array()), "html", null, true);
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
  <h1>Les messages envoyés</h1>
  
  <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">Réçus</a>
  <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 72
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 73
            echo "    <h5 class=\"text-muted\">Aucun message trouvé !</h5>
  ";
        } else {
            // line 75
            echo "    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>Récepteur</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 87
                echo "          <tr>
            <td>
              <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "nom", array()), "html", null, true);
                echo " </a>
            </td>
            <td>
              <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
              <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo " </a>
            </td>
            <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 99
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
            // line 105
            echo "      </tbody>
    </table>
      
    <div class=\"messages-details\"></div>
  ";
        }
        // line 110
        echo "  
";
        
        $__internal_3ce2a6bb584f03eebaf90212ebe0270c185863e1a64347b91dfc91bbbcdd1582->leave($__internal_3ce2a6bb584f03eebaf90212ebe0270c185863e1a64347b91dfc91bbbcdd1582_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 110,  263 => 105,  251 => 99,  246 => 97,  239 => 95,  231 => 92,  221 => 89,  217 => 87,  213 => 86,  200 => 75,  196 => 73,  194 => 72,  189 => 70,  185 => 69,  181 => 68,  173 => 62,  159 => 51,  143 => 45,  138 => 42,  132 => 40,  126 => 37,  123 => 36,  121 => 35,  116 => 33,  113 => 32,  109 => 31,  100 => 25,  96 => 24,  92 => 23,  86 => 19,  82 => 17,  80 => 16,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Messages envoyés - {{ parent() }}
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
                                            {% if message.recepteur.image is null %}
                                                <img class=\"img-circle\"
                                                     src=\"{{ asset('uploads/profils/default.jpg') }}\"
                                                     alt=\"Tour Package\"/>
                                            {% else %}
                                            <img class=\"img-circle\" src=\"{{ asset(message.recepteur.image.webPath) }}\" alt=\"Man\" />
                                            {% endif %}
                                        </div>
                                        <div class=\"content\">
                                            <div class=\"row gap-20 mb-0 over-y\">
                                                <p><b>{{ message.recepteur.prenoms }} {{ message.recepteur.nom }}  </b>: {{ message.contenu }}</p>
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
  <h1>Les messages envoyés</h1>
  
  <a href=\"{{ path('lgp_user_message_new') }}\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"{{ path('lgp_user_message_receive') }}\" class=\"btn btn-primary\">Réçus</a>
  <a href=\"{{ path('lgp_user_message_send') }}\" class=\"btn btn-primary\">Envoyés</a>
  
  {% if messages|length <= 0 %}
    <h5 class=\"text-muted\">Aucun message trouvé !</h5>
  {% else %}
    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>Récepteur</th>
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
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\">{{ message.recepteur.prenoms }} {{ message.recepteur.nom }} </a>
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
