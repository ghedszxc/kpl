<template>
    <div>
        <!-- DISPLAY WHEN VIEW IS LARGE -->
        <!-- <v-layout wrap row class="hidden-sm-and-down">
            <v-flex xs12 sm4 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card flat :style="{'cursor': hover ? 'pointer' : 'default', 'border-radius': '0'}">
                        <v-img height="250px"
                            src="https://www.bidlink.net/news/wp-content/uploads/2019/08/12_ton_hydraulic_tripod_jack.jpg">
                            <v-btn
                                v-if="!hover"
                                text small class="primary white--text"
                                style="position: absolute; top: 0; right: 0; border-radius: 0;">
                                Inquire
                            </v-btn>
                            <v-expand-transition>
                            <div
                                v-if="hover"
                                class="d-flex transition-fast-in-fast-out white v-card--reveal display-3 white--text"
                                style="height: 100%;">
                                
                                <v-btn text large class="primary white--text"
                                    style="border-radius: 0;">
                                    Inquire Now
                                </v-btn>
                            </div>
                            </v-expand-transition>
                        </v-img>
                        <v-card-text>
                            <p class="main_font"> Hydraulic Tripod Jack </p>
                            <span class="font-weight-light">Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at</span>
                        </v-card-text>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs12 sm4 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card flat :style="{'cursor': hover ? 'pointer' : 'default', 'border-radius': '0'}">
                        <v-img height="250px"
                            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg">
                            <v-btn
                                v-if="!hover"
                                text small class="primary white--text"
                                style="position: absolute; top: 0; right: 0; border-radius: 0;">
                                Inquire
                            </v-btn>
                            <v-expand-transition>
                            <div
                                v-if="hover"
                                class="d-flex transition-fast-in-fast-out white v-card--reveal display-3 white--text"
                                style="height: 100%;">
                                
                                <v-btn text large class="primary white--text"
                                    style="border-radius: 0;">
                                    Inquire Now
                                </v-btn>
                            </div>
                            </v-expand-transition>
                        </v-img>
                        <v-card-text>
                            <p class="main_font"> Hydraulic Chuchu </p>
                            <span class="font-weight-light">Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at</span>
                        </v-card-text>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs12 sm4 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card flat :style="{'cursor': hover ? 'pointer' : 'default', 'border-radius': '0'}">
                        <v-img height="250px"
                            src="https://dewaldfluidpower.com/wp-content/uploads/2017/10/pro-top-2.jpg">
                            <v-btn
                                v-if="!hover"
                                text small class="primary white--text"
                                style="position: absolute; top: 0; right: 0; border-radius: 0;">
                                Inquire
                            </v-btn>
                            <v-expand-transition>
                            <div
                                v-if="hover"
                                class="d-flex transition-fast-in-fast-out white v-card--reveal display-3 white--text"
                                style="height: 100%;">
                                
                                <v-btn text large class="primary white--text"
                                    style="border-radius: 0;">
                                    Inquire Now
                                </v-btn>
                            </div>
                            </v-expand-transition>
                        </v-img>
                        <v-card-text>
                            <p class="main_font"> Hydraulic Chuchu </p>
                            <span class="font-weight-light">Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at</span>
                        </v-card-text>
                    </v-card>
                </v-hover>
            </v-flex>
        </v-layout> -->
        <!-- DISPLAY WHEN VIEW IS SMALL -->
        <v-layout wrap row>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 1</v-list-item-title>
                                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HTB1iZvMs29TBuNjy0Fcq6zeiFXaP/Portable-Digital-Mug-Heat-Press-Machine-Cup.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 2</v-list-item-title>
                                <v-list-item-subtitle class="overline">Perdiet, felis eu hendrerit pretium</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HTB1AKXlXfWG3KVjSZFPq6xaiXXa2/Wholesale-USB2-0-cable-Male-to-Micro.jpg_300x300.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 3</v-list-item-title>
                                <v-list-item-subtitle class="overline">Imperdiet pretium, sapien mauri</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HTB1GplGLSzqK1RjSZPcq6zTepXao/Shenzhen-OEM-custom-logo-credit-card-usb.jpg_300x300.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 4</v-list-item-title>
                                <v-list-item-subtitle class="overline">Sapien mauri eu hendrerit</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HLB1Q1RPS5LaK1RjSZFxq6ymPFXaz/Wholesale-Hifu-Korea-Hifu-Made-in-Korea.jpg_300x300.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 5</v-list-item-title>
                                <v-list-item-subtitle class="overline">Sapien mauri hendrerit</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HTB1DFZpeLWG3KVjSZFPq6xaiXXaL/BPA-Free-Soft-Cartoon-Blocks-Toy-For.jpg_300x300.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 6</v-list-item-title>
                                <v-list-item-subtitle class="overline">Sapien hendrerit eu</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HTB1iZvMs29TBuNjy0Fcq6zeiFXaP/Portable-Digital-Mug-Heat-Press-Machine-Cup.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 2</v-list-item-title>
                                <v-list-item-subtitle class="overline">Perdiet, felis eu hendrerit pretium</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
            <v-flex xs6 sm3 class="px-1 mt-2">
                <v-hover v-slot:default="{ hover }">
                    <v-card :elevation="hover ? 4 : 0">
                        <v-list-item three-line>
                            <v-list-item-avatar tile size="80" color="grey">
                                <v-img src="https://s.alicdn.com/@sc01/kf/HTB1AKXlXfWG3KVjSZFPq6xaiXXa2/Wholesale-USB2-0-cable-Male-to-Micro.jpg_300x300.jpg"
                                    class="white--text align-end">
                                </v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title class="headline">Headline 3</v-list-item-title>
                                <v-list-item-subtitle class="overline">Imperdiet pretium, sapien mauri</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-hover>
            </v-flex>
        </v-layout>
    </div>
</template>
<script>
export default {
    data:() => ({
        
    })
}
</script>
<style scoped>
    .v-card--reveal {
    align-items: center;
    bottom: 0;
    justify-content: center;
    opacity: .7;
    position: absolute;
    width: 100%;
    }
</style>