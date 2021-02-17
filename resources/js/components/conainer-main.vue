<template>
    <v-app id="inspire">
        <v-app id="inspire">
            <v-navbar/>
            <v-main>
                <div class="bg_header" :style="{ backgroundImage:  `url(${asset('img/background.jpg')})` }">
                    <h1 class="color-grey-lighten">Miguel Colin Flores</h1>
                    <h3 class="color-grey-lighten">Ing. en Sistemas Computacionales</h3>

                    <v-img
                        class="img_avatar"
                        style="margin: auto"
                        cover
                        height="150"
                        :src="asset('img/img-profile.jpg')"
                    ></v-img>
                </div>

                <v-container class="about_container">
                    <v-row>
                        <v-col
                            class="main-col"
                            cols="12">
                            <v-tabs
                                v-model="tab"
                                grow
                                background-color="transparent"
                                show-arrows>
                                <v-tabs-slider color="lighten-3"></v-tabs-slider>
                                <v-tab
                                    v-for="(section,i) in sections"
                                    :key="i">
                                    {{ section.name }}
                                </v-tab>
                            </v-tabs>

                            <v-tabs-items v-model="tab">
                                <v-tab-item
                                    v-for="(section,i) in sections"
                                    :key="i">
                                    <v-card
                                        class=" rounded-lg"
                                        outlined
                                        rounded
                                        elevation="5"
                                        tile>

                                        <v-about-me v-if='section.section === 1 '/>
                                        <v-job-experience v-if='section.section === 2 '/>
                                        <v-education v-if='section.section === 3 '/>
                                        <v-briefcase v-if='section.section === 4  '/>

                                    </v-card>
                                </v-tab-item>
                            </v-tabs-items>
                        </v-col>
                    </v-row>

                </v-container>

            </v-main>
        </v-app>
    </v-app>
</template>

<script>
export default {
    data() {
        return {
            tab: null,
            sections: [
                {section: 1, name: 'Acerca de mi'},
                {section: 2, name: 'Experiencia'},
                {section: 3, name: 'Estudios'},
                {section: 4, name: 'Portafolio'},
            ]
        }
    },
    methods: {
        asset(url) {
            return `${window._asset}${url}`
        }
    }

}
</script>
