<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9c0ed8da91f0d46460ab323d9f3ff736501c15061db04b5b56da4150528d541b extends Twig_Template
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
        $__internal_0f42598dbcc0bb81afbeace4b86e8d716afa5b7c2b111e338c6f89dc8bc8e602 = $this->env->getExtension("native_profiler");
        $__internal_0f42598dbcc0bb81afbeace4b86e8d716afa5b7c2b111e338c6f89dc8bc8e602->enter($__internal_0f42598dbcc0bb81afbeace4b86e8d716afa5b7c2b111e338c6f89dc8bc8e602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0f42598dbcc0bb81afbeace4b86e8d716afa5b7c2b111e338c6f89dc8bc8e602->leave($__internal_0f42598dbcc0bb81afbeace4b86e8d716afa5b7c2b111e338c6f89dc8bc8e602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
