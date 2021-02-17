<template>
    <div>
        <h3 class="text-justufy color-grey-darken mt-8 ml-3 mr-3 mb-3">
            Hola mi nombre es Miguel Colin Flores, soy desarrollador de software
            Computacionales, actualmente estor por cumplir 3 años de experiencia en desarrollo web y móvil
            centrandome en el dessarollo de android con habilidades en :
        </h3>
        <v-row no-gutters class="ml-3 mr-3">
            <v-col cols="6" sm="3">
                <ul>
                    <li>DataBinding</li>
                    <li>Kotlin</li>
                    <li>Java</li>
                    <li>RXJava</li>
                    <li>Material Design (RecyclerView, BottomBar, CardView, etc.)</li>
                </ul>
            </v-col>
            <v-col cols="6" sm="3">
                <ul>
                    <li>Activities</li>
                    <li>Fragments</li>
                    <li>Retrofit</li>
                    <li>Room</li>
                </ul>
            </v-col>
            <v-col cols="6" sm="3">
                <ul>
                    <li>Firebase</li>
                    <li>Custom Views</li>
                    <li>Arquitecturas (MVP/ MVVP)</li>
                </ul>
            </v-col>
        </v-row>

        <h3 class="text-justufy color-grey-darken mt-8 ml-3 mr-3 mb-3">
            Además de emplear tecnologías web como :
        </h3>
        <v-row no-gutters class="ml-3 mr-3">
            <v-col cols="6" sm="3">
                <ul>
                    <li>Vue</li>
                    <li>React</li>
                    <li>ES6</li>
                    <li>CSS</li>
                </ul>
            </v-col>
            <v-col cols="6" sm="3">
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                </ul>
            </v-col>
        </v-row>
        <h3 class="text-justufy color-grey-darken mt-8 ml-3 mr-3 mb-3">
            Hablando un poco de mi, soy una persona que le gusta aprender tecnologias nuevas y
            se apasiona por el desarrollo de sistemas.
            <br>
            Algunas de las aptitudes y valores que me representan son:
        </h3>
        <v-row no-gutters class="ml-3 mr-3">
            <v-col cols="6" sm="3">
                <ul>
                    <li>Responsabilidad</li>
                    <li>Amabilidad</li>
                    <li>Honestidad</li>
                </ul>
            </v-col>
            <v-col cols="6" sm="3">
                <ul>
                    <li>Entusiasta</li>
                    <li>Autodidacta</li>
                    <li>Comprometido</li>
                </ul>
            </v-col>
            <v-col cols="6" sm="3">
                <ul>
                    <li>Positivo</li>
                    <li>Trabajo en equipo</li>
                    <li>Trabajo bajo presión</li>
                </ul>
            </v-col>
        </v-row>
        <v-row no-gutters class="pa-3">
            <v-col cols="12" sm="6">
                <v-row no-gutters class="ma-3">
                    <v-col cols="4">
                        <b>Fecha de nacimiento:</b>
                    </v-col>
                    <v-col cols="8">
                        <h3>24 Agosto 1996</h3>
                    </v-col>
                </v-row>

                <v-row no-gutters class="ma-3">
                    <v-col cols="4">
                        <b>Telefono:</b>
                    </v-col>
                    <v-col cols="8">
                        <h3>7223731006</h3>
                    </v-col>
                </v-row>
            </v-col>

            <v-col cols="12" sm="6">
                <v-row no-gutters class="ma-3">
                    <v-col cols="4">
                        <b>Edad:</b>
                    </v-col>
                    <v-col cols="8">
                        <h3>{{ new Date().getFullYear() - 1996 }} años</h3>
                    </v-col>
                </v-row>

                <v-row no-gutters class="ma-3">
                    <v-col cols="4">
                        <b>Correo:</b>
                    </v-col>
                    <v-col cols="8">
                        <h3>maiktmp@gmail.com</h3>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
        <v-row no-gutters class="ma-5">
            <v-col
                class="text-center ma-auto"
                cols="12"
                sm="4">
                <v-btn color="primary" class="ma-2" block>
                    <v-icon left>cloud_download</v-icon>
                    DESCARGAR CV
                </v-btn>
            </v-col>
            <v-col
                class="text-center ma-auto"
                cols="12"
                sm="4">
                <v-btn color="primary" class="ma-2" block>
                    <v-icon left>call</v-icon>
                    CONTACTAR
                </v-btn>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "about_me"
}
</script>

<style scoped>

</style>
