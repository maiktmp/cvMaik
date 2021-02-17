<template>
    <div>
        <v-row>
            <v-col class="">
                <v-expansion-panels inset>
                    <v-expansion-panel>
                        <v-expansion-panel-header>
                            <div class="d-flex">
                                <v-icon class="mdi mdi-android" color="green" size="30"></v-icon>
                                <h1>Habits Reminder</h1>
                            </div>
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            <v-row>
                                <v-col cols="12">
                                    <h4>
                                        Es una aplicación Android para crear tareas y recordatorios algunas
                                        características
                                        importantes
                                        son:
                                        <ul>
                                            <li>Empleo la arquitectura MVP</li>
                                            <li>Uso Firebase para la autenticación</li>
                                            <li>Únicamente funciona con almacenamiento local con Room</li>
                                            <li>Para procesar las llamadas a base de datos empleo RXJava</li>
                                            <li>La librería de diseño empleada es MaterialIO</li>
                                            <li>Hago uso de Dagger</li>
                                            <li>Hago uso de Fragments y DialogFragment</li>
                                            <li>Se empleó Kotlin como lenguaje principal</li>
                                        </ul>
                                    </h4>
                                    <h5 class="red--text">*Aún no esta terminado en mis tiempos libres trabajo en
                                        el</h5>
                                </v-col>
                                <v-col class="text-center" cols="12">
                                    <a href="https://github.com/maiktmp/HabitsReminder"> Para ver el proyecto clic
                                        aquí </a>
                                </v-col>

                                <v-col cols="12">
                                    <v-carousel>
                                        <v-carousel-item
                                            v-for="(image, i) in habitsImages"
                                            :key="i">
                                            <v-img
                                                aspect-ratio="2.4"
                                                contain
                                                :src="asset(image)"
                                            ></v-img>
                                        </v-carousel-item>
                                    </v-carousel>
                                </v-col>
                            </v-row>
                        </v-expansion-panel-content>
                    </v-expansion-panel>

                    <v-expansion-panel>
                        <v-expansion-panel-header>
                            <div class="d-flex">
                                <v-icon class="mdi mdi-vuetify" color="blue" size="30"></v-icon>
                                <h1>C.V. Miguel</h1>
                            </div>
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            <v-row>
                                <v-col cols="12">
                                    <h4>
                                        Es una aplicación web desarrollada en Laravel con el framework de Vue usando la
                                        librería de Vuetify para el diseño con el propósito de mostrar mis skills como
                                        desarrollador
                                    </h4>
                                </v-col>
                                <v-col class="text-center" cols="12">
                                    <a href="https://github.com/maiktmp/cvMaik"> Para ver el proyecto clic aquí </a>
                                </v-col>
                            </v-row>
                        </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "briefcase",
    data: () => ({
        habitsImages: [
            "img/habits/img-habits-reminder-login.png",
            "img/habits/img-habits-reminder-categories-1.png",
            "img/habits/img-habits-reminder-categories-2.png",
            "img/habits/img-habits-reminder-categories-3.png",
            "img/habits/img-habits-reminder-categories-4.png",
        ]
    }),
    methods: {
        asset(url) {
            console.log(`${window._asset}${url}`)
            return `${window._asset}${url}`
        }
    }
}
</script>

<style scoped>

</style>
