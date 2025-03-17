<template>
    <div class="mr-10">

      <!-- Bar Charts Section -->
      <div class="grid grid-cols-2 gap-4 bar-chart-wrapper">
        <div class="bar-graph shadow-md">
          <div class="flex justify-between">
            <h6 class="text-xs font-extrabold">Top Sale by Employee</h6>
            <h6 class="text-xs font-bold text-gray-500">View All</h6>
          </div>
          <h2 class="text-sm font-extrabold mt-1">Mubarak Luiz</h2>
          <canvas id="barCanvas1"></canvas>
        </div>
        <div class="bar-graph shadow-md">
          <div class="flex justify-between">
            <h6 class="text-xs font-extrabold">Top Sale by Employee</h6>
            <h6 class="text-xs font-bold text-gray-500">View All</h6>
          </div>
          <h2 class="text-sm font-extrabold mt-1">Mubarak Luiz</h2>
          <canvas id="barCanvas"></canvas>
        </div>
      </div>
    </div>
  </template>
  <style></style>
  <script setup lang="ts">
  import { onMounted } from "vue";
 import Graph from "@/composable/Chart";

  /*
   * Chart : this is the class that allows us to use charts in the website
   * chartBluePrint: Is a function used to get a chart type and it properties
   *
   **/

  const Chart = new Graph();

  onMounted(() => {
    //plot a line chart
    const lineCtx = document.getElementById("lineCanvas");
    Chart.chartBluePrint(lineCtx, "line", "#6200FF");
    //plotting a bar chart
    const barCtx1 = document.getElementById("barCanvas1");
    Chart.chartBluePrint(barCtx1, "bar", "#6200FF");
    //ploting the second bar chart
    const barCtx =document.getElementById('barCanvas')
    Chart.chartBluePrint(barCtx, "bar", "#6200FF #620");

  });
  </script>

  <style scoped>
  .line-chart {
    width: 80%;
    height: 200px;
    margin-right: 20px;
    background-color: white;
    padding: 30px;
    margin-right: 30px;
    border-radius: 15px;
  }
  .line-chart-about {
    border-right: 1px solid gray;
  }
  .bar-graph {
    height: 250px;
    background-color: white;
    border-radius: 15px;
    padding: 15px;
    margin-bottom: 20px;
  }
  .bar-chart-wrapper {
    width: 80%;
    margin-right: 20px;
  }

  .line-chart-body {
    width: 200px;
    height: 200px;
    margin-left: 10px;
    /* background-color: red; */
  }
  </style>
