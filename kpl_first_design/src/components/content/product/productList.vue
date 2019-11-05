<template>
  <div>
    <!-- DISPLAY WHEN VIEW IS LARGE -->
    <v-layout wrap row class="hidden-sm-and-down">
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"></v-img>
          <v-card-text >
            <v-checkbox
              v-model="checkbox"
              @change="addToInquire()"
              v-if="userForInquire"
              color="green"
              value="hydraulic 1"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              @change="addToInquire()"
              v-if="userForInquire"
              color="green"
              value="hydraulic 2"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              @change="addToInquire()"
              v-if="userForInquire"
              color="green"
              value="hydraulic 3"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              @change="addToInquire()"
              v-if="userForInquire"
              color="green"
              value="hydraulic 4"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              @change="addToInquire()"
              v-if="userForInquire"
              color="green"
              value="hydraulic 5"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              @change="addToInquire()"
              v-if="userForInquire"
              color="green"
              value="Hydraulic 6"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              v-if="userForInquire"
              color="green"
              value="Hydraulic 7"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 sm4 md3 class="px-1 mt-2">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"
          ></v-img>
          <v-card-text>
            <v-checkbox
              v-model="checkbox"
              v-if="userForInquire"
              color="green"
              value="Hydraulic 8"
              small
              label="Hydraulic Chuchu"
            ></v-checkbox>
            <p v-else class="overline">Hydraulic Chuchu</p>
            <span style="font-size: 12px;" class="font-weight-light">
              Suspendisse imperdiet, felis etium, sapien mauris blandit arcu,
              et accumsan neque est ut erat. Vivamus eget tellus euismod,
              interdum nibh at
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
     
    </v-layout>
    <!-- DISPLAY WHEN VIEW IS SMALL -->
    <v-layout wrap row class="hidden-md-and-up">
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
      <v-flex xs6 sm4 class="px-1 mt-2">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end"
                ></v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-model="checkbox"
                    color="green"
                    label="Headline 1"
                    v-if="userForInquire"
                  ></v-checkbox>
                  <span v-else class="overline">Headline 1</span>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">Greyhound divisely fonwderfully</v-list-item-subtitle>
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
  data: () => ({
    checkbox: []
  }),
  computed: {
    // PARA MALAMAN KUNG MAG IINQUIRE BA O HINDI
    userForInquire() {
      return this.$store.state.inquire.userForInquire;
    },
  },
  methods: {
    addToInquire() {
      const self = this;
      self.$store.commit('inquire/CHECKBOX',this.checkbox)
    }
  }
};
</script>
<style scoped>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.7;
  position: absolute;
  width: 100%;
}
.custom-checkbox {
  position: absolute;
  top: 0;
  right: 0;
  border-radius: 0;
}
</style>
