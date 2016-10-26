<?php

/* LGPUserBundle:Message:receive.html.twig */
class __TwigTemplate_7a792f31b785a234bbacbac60925ace82070b8467647c0812142b846da1c4124 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Messages reçus - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    
    <div class=\"dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) <= 0)) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_new");
            echo "\">Nouveau</a></li>
                                <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_receive");
            echo "\">Recus</a></li>
                                <li><a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_send");
            echo "\">Envoyes</a></li>
                            </ul>
                        </div>
                        <div class=\"messages-users\">
                            <ul class=\"review-list\">
                                
                                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "                                <li class=\"clearfix\">
                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\" style=\"display: block\" class=\"message_read\">
                                        <div class=\"image img-circle\">
                                            ";
                // line 35
                if ((null === $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "image", array()))) {
                    // line 36
                    echo "                                                <img class=\"img-circle\"
                                                     src=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\"
                                                     alt=\"Tour Package\"/>
                                            ";
                } else {
                    // line 40
                    echo "                                            <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "image", array()), "webPath", array())), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">
    Reçus<span class=\"badge\">";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("LGPUserBundle:Message:receive", array("is_read" => "false")));
        echo "</span>
  </a>
  <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 74
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) <= 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                echo "          <tr>
            <td>
              <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "nom", array()), "html", null, true);
                echo " </a>
            </td>
            <td>
              <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
              <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_user_message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
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
        return array (  253 => 111,  247 => 107,  235 => 101,  230 => 99,  223 => 97,  215 => 94,  205 => 91,  201 => 89,  197 => 88,  184 => 77,  180 => 75,  178 => 74,  173 => 72,  168 => 70,  164 => 69,  160 => 68,  152 => 62,  138 => 51,  122 => 45,  117 => 42,  111 => 40,  105 => 37,  102 => 36,  100 => 35,  95 => 33,  92 => 32,  88 => 31,  79 => 25,  75 => 24,  71 => 23,  65 => 19,  61 => 17,  59 => 16,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
