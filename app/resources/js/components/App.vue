<template>
  <div style="padding:20px; font-family:sans-serif;">
    <h2>Vue + Axios + Laravel API Test</h2>

    <button @click="callApi" style="padding:8px 14px; margin-top:10px;">
      API 호출
    </button>

    <p v-if="loading" style="margin-top:10px;">⏳ 요청 중...</p>

    <p v-if="message" style="margin-top:10px;">
      👉 서버 응답: <strong>{{ message }}</strong>
    </p>
  </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

const message = ref("");
const loading = ref(false);

const callApi = async () => {
  loading.value = true;
  message.value = "";

  try {
    const res = await axios.get("/api/hello");
    message.value = res.data.message;
  } catch (e) {
    console.error(e);
    message.value = "요청 실패";
  }

  loading.value = false;
};
</script>
