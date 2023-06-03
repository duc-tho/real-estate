FROM alpine:latest

# Install basic dependencies and libraries
RUN apt-get update && \
     apt-get install -y --no-install-recommends \
     zip \
     unzip \
     vim \
     sudo \
     curl \
     tar \
     wget \
     git \
     bzip2 \
     && apt-get clean && \
     rm -rf /var/lib/apt/lists/*

EXPOSE 3005
