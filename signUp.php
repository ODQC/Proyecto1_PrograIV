<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign-Up</title>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form by Colorlib</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/styleLogin.css">
        

    </head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Registro de Usuarios</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="cedula" id="cedula" placeholder="Cédula de indentidad" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nombre" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="apellido1" id="apellido1"
                                placeholder="Primer apellido" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="apellido2" id="apellido2"
                                placeholder="Segundo apellido" />
                        </div>
                        <div class="form-group">
                           
                            <select class="form-control" id="sel1">
                                <option>--Genero--</option>
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option>No quiero indicar</option>
                            </select>
                        </div>
                        <div class="form-group">
                        
                            <select class="form-control" id="sel1">
                                <option>--Edad--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>33</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>50</option>
                                <option>61</option>
                                <option>62</option>
                                <option>63</option>
                                <option>64</option>
                                <option>65</option>
                                <option>66</option>
                                <option>67</option>
                                <option>68</option>
                                <option>69</option>
                                <option>70</option>
                                <option>71</option>
                                <option>72</option>
                                <option>73</option>
                                <option>74</option>
                                <option>75</option>
                                <option>76</option>
                                <option>77</option>
                                <option>78</option>
                                <option>79</option>
                                <option>80</option>
                                <option>81</option>
                                <option>82</option>
                                <option>83</option>
                                <option>84</option>
                                <option>85</option>
                                <option>86</option>
                                <option>87</option>
                                <option>88</option>
                                <option>89</option>
                                <option>90</option>
                                <option>91</option>
                                <option>92</option>
                                <option>93</option>
                                <option>94</option>
                                <option>95</option>
                                <option>96</option>
                                <option>97</option>
                                <option>98</option>
                                <option>99</option>
                                <option>100</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email"
                                placeholder="Correo Electrónico" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="telefono" id="telefono" placeholder="Telefono" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password"
                                placeholder="Contraseña" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password"
                                placeholder="Confirmar contraseña" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Estoy de acuerdo
                                con los terminos de uso<a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Registrase" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Ya tienes una cuenta? <a href="logIn.php" class="loginhere-link">Accesa aquí</a>
                        <br> Esta plantilla fue tomada de (https://colorlib.com)
                        <br>Rediseñada por Oscar Quesada.
                        <br>Con fines académicos.
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <?php
    		if(isset($_POST[''])){
    			require_once "/CRUD_PHP/procesos/guardarUsuarios.php";
    		}
    ?>
</body><!-- La plantilla fue tomada de  Colorlib (https://colorlib.com) -->

</html>
</head>

<body>

</body>

</html>