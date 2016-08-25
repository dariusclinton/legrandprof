<?php

/* LGPUserBundle:Avis:index.html.twig */
class __TwigTemplate_bb49aa1acb4ac1a0904aad5e6c95a97187d10b8d4c4f33f1709e72e0513d1074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:index.html.twig", 1);
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
        $__internal_7585751eac5937e5f9ea84f1ddb8f36c7f69e58d88be44b2f12e36e24003ffd2 = $this->env->getExtension("native_profiler");
        $__internal_7585751eac5937e5f9ea84f1ddb8f36c7f69e58d88be44b2f12e36e24003ffd2->enter($__internal_7585751eac5937e5f9ea84f1ddb8f36c7f69e58d88be44b2f12e36e24003ffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7585751eac5937e5f9ea84f1ddb8f36c7f69e58d88be44b2f12e36e24003ffd2->leave($__internal_7585751eac5937e5f9ea84f1ddb8f36c7f69e58d88be44b2f12e36e24003ffd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ab79a73c0ee9a7c53b2bf20faa4044e07e9f067cf6a69305fa6507815287f09 = $this->env->getExtension("native_profiler");
        $__internal_0ab79a73c0ee9a7c53b2bf20faa4044e07e9f067cf6a69305fa6507815287f09->enter($__internal_0ab79a73c0ee9a7c53b2bf20faa4044e07e9f067cf6a69305fa6507815287f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0ab79a73c0ee9a7c53b2bf20faa4044e07e9f067cf6a69305fa6507815287f09->leave($__internal_0ab79a73c0ee9a7c53b2bf20faa4044e07e9f067cf6a69305fa6507815287f09_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcdfe8a36891c6274a8dff51fcdfccc0c7b51ede4822e9a484fe5f273cdcb609 = $this->env->getExtension("native_profiler");
        $__internal_dcdfe8a36891c6274a8dff51fcdfccc0c7b51ede4822e9a484fe5f273cdcb609->enter($__internal_dcdfe8a36891c6274a8dff51fcdfccc0c7b51ede4822e9a484fe5f273cdcb609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Vos avis</h1>

  <p>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis_add");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
  </p>
  
  ";
        // line 14
        if ((null === (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")))) {
            // line 15
            echo "    <h1 class=\"text-muted\">Aucun avis trouvé !</h1>
  ";
        } else {
            // line 17
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Prof</th>
          <th>Note</th>
          <th>Commentaire</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
        </tr>
      </tfoot>
      <tbody>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")));
            foreach ($context['_seq'] as $context["_key"] => $context["avs"]) {
                // line 34
                echo "          <tr>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["avs"], "prof", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "note", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["avs"], "commentaire", array()), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </tbody>
    </table>
  ";
        }
        
        $__internal_dcdfe8a36891c6274a8dff51fcdfccc0c7b51ede4822e9a484fe5f273cdcb609->leave($__internal_dcdfe8a36891c6274a8dff51fcdfccc0c7b51ede4822e9a484fe5f273cdcb609_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  109 => 37,  105 => 36,  99 => 35,  96 => 34,  92 => 33,  74 => 17,  70 => 15,  68 => 14,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Vos avis</h1>*/
/* */
/*   <p>*/
/*     <a href="{{ path('lgp_user_avis_add') }}" class="btn btn-primary">Ajouter</a>*/
/*   </p>*/
/*   */
/*   {% if avis is null %}*/
/*     <h1 class="text-muted">Aucun avis trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Prof</th>*/
/*           <th>Note</th>*/
/*           <th>Commentaire</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tfoot>*/
/*         <tr>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*         </tr>*/
/*       </tfoot>*/
/*       <tbody>*/
/*         {% for avs in avis %}*/
/*           <tr>*/
/*             <td>{{ avs.prof.prenoms }} {{ avs.prof.nom }}</td>*/
/*             <td>{{ avs.note }}</td>*/
/*             <td>{{ avs.commentaire }}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/* {% endblock %}*/
