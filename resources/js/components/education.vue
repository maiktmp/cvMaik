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
                                <h2>{{ item.name }}</h2>
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
    name: "education",
    data: () => (
        {
            date: new Date(),
            items: [
                {
                    color: 'blue darken-1',
                    icon: 'mdi-briefcase',
                    title: 'Instituto Tecnológico de Toluca',
                    date: 'Ene 2014 - Jun 2019',
                    name: 'Ingeniería de sistemas computacionales'
                },
                {
                    color: 'deep-purple darken-1',
                    icon: 'mdi-briefcase',
                    title: 'Cursos',
                    date: 'Actualmente',
                    name: 'Actualmente aprendo sobre el desarrollo de Android en plataformas como Platzi y Linkedin Learning'
                },
            ],
        }),
}
</script>

<style scoped>

</style>
