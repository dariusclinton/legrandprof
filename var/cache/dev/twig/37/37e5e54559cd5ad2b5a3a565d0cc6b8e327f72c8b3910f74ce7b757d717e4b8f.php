<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d3fe96fe86fc23adac38bc34ef34192a6bb8867fac22964594916924e2130cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ad2b07ed1fc9aa38b10fd32e73ed97e6354a8bdb2ffa79c79131d65e93a6062 = $this->env->getExtension("native_profiler");
        $__internal_9ad2b07ed1fc9aa38b10fd32e73ed97e6354a8bdb2ffa79c79131d65e93a6062->enter($__internal_9ad2b07ed1fc9aa38b10fd32e73ed97e6354a8bdb2ffa79c79131d65e93a6062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9ad2b07ed1fc9aa38b10fd32e73ed97e6354a8bdb2ffa79c79131d65e93a6062->leave($__internal_9ad2b07ed1fc9aa38b10fd32e73ed97e6354a8bdb2ffa79c79131d65e93a6062_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
