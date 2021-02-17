<template>
    <div>
        <v-row>
            <v-col class="pa-5">
                <v-timeline
                    align-top
                    :dense="$vuetify.breakpoint.smAndDown"
                >
                    <v-timeline-item
                        v-for="(item, i) in items"
                        :key="i"
                        :color="item.color"
                        :icon="item.icon"
                        fill-dot>
                        <v-card
                            :color="item.color"
                            dark>
                            <v-card-title class="title">
                                <div class="d-flex flex-wrap flex-column">
                                    <h3>
                                        {{ item.title }}
                                    </h3>
                                    <h3>
                                        <b>{{ item.date }}</b>
                                    </h3>
                                </div>
                            </v-card-title>
                            <v-card-text class="white text--primary pt-4">
                                <div v-for="(cadre,i) in item.cadres" :key="i">
                                    <div class="mt-3">
                                        <h2>{{ cadre.name }}</h2>
                                        <h3>{{ cadre.desc }}</h3>
                                    </div>
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "job-experience",
    data: () => (
        {
            date: new Date(),
            items: [
                {
                    color: 'blue darken-1',
                    icon: 'mdi-briefcase',
                    title: 'Instituto Tecnológico de Toluca',
                    date: 'Ene 2017 - Jun 2018',
                    cadres: [
                        {
                            name: 'Desarrollador Web Jr.',
                            desc: 'En base a requerimentos otorgador por el Departamento de Desarrollo de Sistemas ' +
                                ' desarrollaba pequeños sistemas web internos donde empleaba tecnologías como Java, Js, Html, CSS. ',
                        }
                    ]
                },
                {
                    color: 'amber accent-4',
                    icon: 'mdi-briefcase',
                    title: 'Satoritech',
                    date: 'May 2018 -  Feb 2021',
                    cadres: [
                        {
                            name: 'Desarrollador Web JR',
                            desc: 'Junto a el responsable de proyecto creaba bases de datos asi como un proyecto web donde los clientes pudieran administrar su información empleando tecnologías como: ' +
                                'Css, Html ,JS, Laravel, MySQL',
                        },
                        {
                            name: 'Desarrollador Web Mid',
                            desc: 'De manera individual desarrollaba sistemas web ERP desde la creación de la base de datos hasta la vistas web, empleando tecnologías como: ' +
                                'Less, Laravel, Vue, React, Docker, CentOS',
                        },
                        {
                            name: 'Desarrollador JR Móvil-Android',
                            desc: 'Junto a el responsable de proyecto desarrollaba aplicaciones  android empleando:' +
                                'Activities, Room, Retrofit, MVP, Layouts',
                        },
                        {
                            name: 'Desarrollador Mid Móvil-Android',
                            desc: 'Individualmente desarrollaba aplicaciones  android dónde creaba API, implemente nuevas librerías, un nuevo lenguaje y una nueva arquitectura, trabaje con: ' +
                                'Material IO, DataBinding, Fragmets, Firebase, RxJava, Kotlin, CustomViews',
                        },
                        {
                            name: 'Desarrollador Flat',
                            desc: 'Puesto en el cual era responsable del desarrollo de un sistema web asi como de su aplicación en Android, asi como lider de equipo en android donde ' +
                                'supervisaba y guiando mis compañeros menos experimentados',
                        }
                    ]
                },
            ],
        }),
}
</script>

<style scoped>

</style>
